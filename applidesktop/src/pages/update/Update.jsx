import { React, useState, useEffect } from 'react';
import { Link, useNavigate, useParams } from 'react-router-dom';
import { Button } from 'semantic-ui-react';
import { Navbar } from '../../components/navbar/Navbar';
import { Sidebar } from '../../components/sidebar/Sidebar';
// import DriveFolderUploadOutlinedIcon from '@mui/icons-material/DriveFolderUploadOutlined';
import "./Update.scss";
import { useForm } from "react-hook-form";
import { yupResolver } from '@hookform/resolvers/yup';
import * as yup from "yup";
// import { DefaultLegendContent } from 'recharts/types/component/DefaultLegendContent';


const Update = (props) => {
    const [produit, setProduit] = useState({ loading: true, data: undefined })

    const { loading, data } = produit

    const { id: produitId } = useParams()

    useEffect(() => {
        fetch(`http://127.0.0.1:8000/api/produits/${produitId}`)
        .then((res) => res.json())
        .then(res => setProduit({ loading: false, data: res }))
        .catch(e => console.log(e));
    }, [])

    const [file, setFile] = useState('');
    const [nom, setNom] = useState('');
    const [description, setDescription] = useState('');
    const [image, setImage] = useState('');
    const [prix, setPrix] = useState('');
    const [prixHT, setPrixHT] = useState('');
    const [categorie, setCategorie] = useState('');
    const [fou, setFou] = useState('');

    // déclarer une const schema (mettre les erreurs dedans)
    const priceRegex = /^\d+(\.\d{1,2})?$/;
    const LibelleRegex = /^[a-zA-Z]+$/;
    const rubRegex = /^\/api\/rubriques\/[0-9]{1,2}$/;
    const fouRegex = /^\/api\/fournisseurs\/[0-9]{1,2}$/
    const photoRegex = /[^\s]+(.*?).(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/;
    const schema = yup.object().shape({
        libelleCourt: yup.string().matches(LibelleRegex,'Seule les caractères alphabétiques sont autorisés !').required('Ce champ est requis !'),
        libelleLong: yup.string().required('Ce champ est requis !'),
        photo: yup.string().matches(photoRegex, 'Seul les exprésions jpg, jpeg, png, gif, JPG, JPEG, PNG, GIf sont accepter !'),
        prixAchat: yup.string().matches(priceRegex, 'Prix invalide').required('Ce champ est requis !'),
        prixHorsTaxe: yup.string().matches(priceRegex, 'Prix invalide').required('Ce champ est requis !'),
        rubrique: yup.string().matches(rubRegex, 'Veuillez entrez l\'id de la catégorie comme ceci /api/rubriques/1').required('Ce champ est requis !'),
        fournisseur: yup.string().matches(fouRegex, 'Veuillez entrez l\'id de la catégorie comme ceci /api/fournisseurs/1').required('Ce champ est requis !'),
    }).required('Tous les champs sont requis !');

    // déclarer const register qui prendra en compte toute les valeurs du form automatiquement
    const {register: updateProductForm, handleSubmit, formState:{ errors }, reset} = useForm({
        resolver: yupResolver(schema)
    });    

    const navigate = useNavigate();

    const updateData = (infos) => {

        const infoWithPictureName = {...infos}

        /* On effectue la requête de modification */
        fetch(`http://127.0.0.1:8000/api/produits/${id}`, {
            method: 'PUT',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(infoWithPictureName),

        })
            .then(props.onChange());/* On fait remonter le changement dans App.jsx pour mettre à jour le produit */
        navigate("/liste");
    }

    const upload = (e) => {
        setImage(e.target.value);
        setFile(e.target.files[0]);
    }


    if (loading) {
        return <p>Loading...</p>
    }

    const { id, libelleCourt, libelleLong, photo, prixAchat, prixHorsTaxe, rubrique, fournisseur } = data;

    if (nom === '') {
        setNom(libelleCourt);
    }

    if (description === '') {
        setDescription(libelleLong);
    }

    if (photo === '') {
        setFile(photo);
    }

    if (prix === '') {
        setPrix(prixAchat);
    }

    if (prixHT === '') {
        setPrixHT(prixHorsTaxe);
    }

    if (categorie === '') {
        setCategorie(rubrique);
    }

    if (fou === '') {
        setFou(fournisseur);
    }


    return (
        <div className='update'>
            <Sidebar />
            <div className='updateContainer'>
                <Navbar />

                <div className='top'>
                    <h1>Formulaire de modification</h1>
                </div>


                <div className='bottom'>

                    <div className='left'>
                        <img
                            src={file ? URL.createObjectURL(file) : "https://icon-library.com/images/no-image-icon/no-image-icon-0.jpg"}
                            alt=""
                        />
                    </div>

                    <div className='right'>

                        <form className='updateForm' onSubmit={handleSubmit(updateData)}>

                            {/* <div className='formInput'>
                                <label htmlFor='photo'>Image : 
                                    <DriveFolderUploadOutlinedIcon className='icon'/>
                                </label><br />
                                <input type="file" id='photo' name='photo' style={{ display: "none" }} { ...updateProductForm('photo', {onChange: (e) => upload(e)})} /><br />
                            </div> */}


                            <div className='formInput'>
                                <label htmlFor='description' className='labelField'>Description</label><br />
                                <textarea rows='6' cols="90" id='description' name='libelleLong' className='inputField' defaultValue={libelleLong} { ...updateProductForm('libelleLong')} /><br />
                                <p>{ errors.libelleLong?.message }</p>
                            </div>


                            <div className='formInput'>
                                <label htmlFor='nom' className='labelField'>Nom</label><br />
                                <input type="text" id="nom" name="libelleCourt" className='inputField' defaultValue={libelleCourt} { ...updateProductForm('libelleCourt')} /><br />
                                <p>{ errors.libelleCourt?.message }</p>
                            </div>

                            <div className='formInput'>
                                <label htmlFor='photo' className='labelField'>Photo</label><br />
                                <input type="text" id='photo' name='photo' className='inputField' defaultValue={photo} { ...updateProductForm('photo', {onChange: (e) => upload(e)})} /><br />
                                <p>{ errors.photo?.message }</p>
                            </div>

                            <div className='formInput'>
                                <label htmlFor='prixAchat' className='labelField'>Prix achat</label><br />
                                <input type="text" id='prixAchat' name='prixAchat' className='inputField' defaultValue={prixAchat} { ...updateProductForm('prixAchat')} /><br />
                                <p>{ errors.prixAchat?.message }</p>
                            </div>

                            <div className='formInput'>
                                <label htmlFor='prixHorsTaxe' className='labelField'>Prix HT</label><br />
                                <input type="text" id='prixHorsTaxe' name='prixHorsTaxe' className='inputField' defaultValue={prixHorsTaxe} { ...updateProductForm('prixHorsTaxe')} /><br />
                                <p>{ errors.prixHorsTaxe?.message }</p>
                            </div>

                            <div className='formInput'>
                                <label htmlFor='rubrique' className='labelField'>Rubrique</label><br />
                                <input type="text" id='rubrique' name='rubrique' className='inputField' defaultValue={rubrique} { ...updateProductForm('rubrique')} /><br />
                                <p>{ errors.rubrique?.message }</p>
                            </div>

                            <div className='formInput'>
                                <label htmlFor='fournisseur' className='labelField'>Fournisseur</label><br />
                                <input type="text" id='fournisseur' name='fournisseur' className='inputField' defaultValue={fournisseur} { ...updateProductForm('fournisseur')} /><br />
                                <p>{ errors.fournisseur?.message }</p>
                            </div>

                            <div className='boutons'>
                                <button type='submit' className='boutonUpdate'>Modifier</button><br /><br />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
}

export { Update };