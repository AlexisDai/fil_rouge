import { React, useState } from 'react';
import { useNavigate, Link } from 'react-router-dom';
import { Button } from 'semantic-ui-react';
import { Navbar } from '../../components/navbar/Navbar';
import { Sidebar } from '../../components/sidebar/Sidebar';
import DriveFolderUploadOutlinedIcon from '@mui/icons-material/DriveFolderUploadOutlined';
import "./Create.scss";
import { useForm } from "react-hook-form";
import { yupResolver } from '@hookform/resolvers/yup';
import * as yup from "yup";

const Create = (props) => {

    const navigate = useNavigate();

    /* On assigne les valeurs */
    const handleAjout = (data) => {//On passe data comme argument  
        console.log({data});

        const dataWithPictureName = {...data, photo: data.photo[0].name}

        /*Requête de création*/
        fetch('http://127.0.0.1:8000/api/produits', {
            method: 'POST',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dataWithPictureName),
        })
            .then(response => response.json())
            .then(props.onChange()); /*On remonte l'info dans App.jsx pour afficher la liste avec le produit ajouté */
        navigate("/liste");
    }

    const upload = (e) => {
        // setPhoto(e.target.value);
        setFile(e.target.files[0]);
        console.log(e.target.files[0])
    }

//On peut supprimer toutes les valeurs :
    const [file, setFile] = useState('');

    // déclarer une const schema (mettre les erreurs dedans)
    const priceRegex = /^\d+(\.\d{1,2})?$/;
    const LibelleRegex = /^[a-zA-Z]+$/;
    const rubRegex = /^\/api\/rubriques\/[0-9]{1,2}$/;
    const fouRegex = /^\/api\/fournisseurs\/[0-9]{1,2}$/
    const schema = yup.object().shape({
        libelleCourt: yup.string().matches(LibelleRegex,'Seule les caractères alphabétiques sont autorisés !').required('Ce champ est requis !'),
        libelleLong: yup.string().required('Ce champ est requis !'),
        prixAchat: yup.string().matches(priceRegex, 'Prix invalide').required('Ce champ est requis !'),
        prixHorsTaxe: yup.string().matches(priceRegex, 'Prix invalide').required('Ce champ est requis !'),
        rubrique: yup.string().matches(rubRegex, 'Veuillez entrez l\'id de la catégorie comme ceci /api/rubriques/1').required('Ce champ est requis !'),
        fournisseur: yup.string().matches(fouRegex, 'Veuillez entrez l\'id de la catégorie comme ceci /api/fournisseurs/1').required('Ce champ est requis !'),
    }).required('Tous les champs sont requis !');

    // déclarer const register qui prendra en compte toute les valeurs du form automatiquement
    const {register: addProductForm, handleSubmit, formState:{ errors }} = useForm({
        resolver: yupResolver(schema)
    });

    return (
        <div className='create'>
            <Sidebar />
            <div className='createContainer'>
                <Navbar />

                <div className='top'>
                    <h1>Ajouter un produit</h1>
                </div>

                <div className='bottom'>

                    <div className='left'>
                        <img
                            src={file ? URL.createObjectURL(file) : "https://icon-library.com/images/no-image-icon/no-image-icon-0.jpg"}
                            alt=""
                        />

                    </div>

                    <div className='right'>

                        <form className='addForm' onSubmit={handleSubmit(handleAjout)}>

                            <div className='formInput'>
                                <label htmlFor='photo'>Image : <DriveFolderUploadOutlinedIcon className='icon'/></label><br />
                                <input type="file" id='photo' name='photo' style={{ display: "none" }}  { ...addProductForm('photo', {onChange: (e) => upload(e)})}/><br />
                            </div>

                            <div className='formInput'>
                                <label htmlFor='nom'>Nom</label><br />
                                <input id='nom' name='libelleCourt' placeholder='Produit trop génial' { ...addProductForm('libelleCourt')} /><br />
                                <p>{ errors.libelleCourt?.message }</p>
                                {/* <input type="text" id="nom" name="libelleCourt" placeholder='Produit trop génial' value={libelleCourt} onChange={(e) => setLibelleCourt(e.target.value)} /><br /> */}
                            </div>

                            <div className='formInput'>
                                <label htmlFor='description'>Description</label><br />
                                <input id='description' name='libelleLong' placeholder='Bois de chêne, acier trempé,...' { ...addProductForm('libelleLong')} /><br />
                                <p>{ errors.libelleLong?.message }</p>
                                {/* <input type="text" id='description' name='libelleLong' placeholder='Bois de chêne, acier trempé,...' value={libelleLong} onChange={(e) => setLibelleLong(e.target.value)} /><br /> */}
                            </div>


                            {/*                             <div className='formInput'>
                                <label htmlFor='photo'>Photo</label><br />
                                <input type="text" id='photo' name='photo' value={photo} onChange={(e) => setPhoto(e.target.value)} /><br />
                            </div> */}

                            <div className='formInput'>
                                <label htmlFor='prixAchat'>Prix achat</label><br />
                                <input id='prixAchat' name='prixAchat' placeholder='150' { ...addProductForm('prixAchat')} /><br />
                                <p>{ errors.prixAchat?.message }</p>
                                {/* <input type="text" id='prixAchat' name='prixAchat' placeholder='150' value={prixAchat} onChange={(e) => setPrixAchat(e.target.value)} /><br /> */}
                            </div>

                            <div className='formInput'>
                                <label htmlFor='prixHorsTaxe'>Prix HT</label><br />
                                <input id='prixHorsTaxe' name='prixHorsTaxe' placeholder='160' { ...addProductForm('prixHorsTaxe')} /><br />
                                <p>{ errors.prixHorsTaxe?.message }</p>
                                {/* <input type="text" id='prixHorsTaxe' name='prixHorsTaxe' placeholder='160' value={prixHorsTaxe} onChange={(e) => setPrixHorsTaxe(e.target.value)} /><br /> */}
                            </div>

                            <div className='formInput'>
                                <label htmlFor='rubrique'>Rubrique</label><br />
                                <input id='rubrique' name='rubrique' placeholder='/api/rubriques/1' { ...addProductForm('rubrique')} /><br />
                                <p>{ errors.rubrique?.message }</p>
                                {/* <input type="text" id='rubrique' name='rubrique' placeholder='/api/rubriques/1' value={rubrique} onChange={(e) => setRubrique(e.target.value)} /><br /> */}
                            </div>

                            <div className='formInput'>
                                <label htmlFor='fournisseur'>Fournisseur</label><br />
                                <input id='fournisseur' name='fournisseur' placeholder='/api/fournisseurs/1' { ...addProductForm('fournisseur')} /><br />
                                <p>{ errors.fournisseur?.message }</p>
                                {/* <input type="text" id='fournisseur' name='fournisseur' placeholder='/api/fournisseurs/1' value={fournisseur} onChange={(e) => setFournisseur(e.target.value)} /><br /> */}
                            </div>
                                <button type="submit" className='boutonAjout'>Ajouter le produit</button>                              
                                {/* <Link to="/liste"><Button className='boutonRetour'>Retour à la liste</Button></Link> */}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
}

export { Create };