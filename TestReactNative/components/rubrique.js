import React from 'react';
import { useState, useEffect } from 'react';
import { Text, View, FlatList, SafeAreaView, Button } from 'react-native';

const Rubrique = () => {

    const [rubriques, setRubriques] = useState([]);

 

    useEffect(() => {
        fetch('https://alexis.amorce.org/api/rubriques')
        .then( (response) => response.json() )
        .then( (data) => setRubriques(data));
    }, [])

    console.log(rubriques);

    return(
        <SafeAreaView>
            <FlatList
                data={rubriques}
                renderItem={rubriques.type}
                keyExtractor={rubriques.id}
            />
        </SafeAreaView>
    );

}
export { Rubrique }; 