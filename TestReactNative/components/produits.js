import React from 'react';
import { useState, useEffect } from 'react';
import { Text, View, FlatList, SafeAreaView, Button, StyleSheet, StatusBar, VirtualizedList } from 'react-native';


const Produits = () => {

    const [produits, setProduits] = useState([]);

    const Item = (item) => (
        <View style={styles.item}>
            <Text style={styles.title}>{item.title}</Text>
        </View>
    )
    

    const getItem = (data, index) => {
        return data[index]
    };


    useEffect(() => {
        fetch('https://alexis.amorce.org/api/produits')
            .then((response) => response.json())
            .then((responseJson) => setProduits(responseJson["hydra:member"]))
            .then(console.log(produits))
    }, []);


    
    

    return (
        <SafeAreaView style={styles.container}>
            <FlatList
                data={produits}
                renderItem={({ item }) => <Item title={item.libelleCourt} key={item.id}/>}
            />
        </SafeAreaView>
    );

}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        marginTop: StatusBar.currentHeight || 0,
    },
    item: {
        backgroundColor: '#f9c2ff',
        padding: 20,
        marginVertical: 8,
        marginHorizontal: 16,
    },
    title: {
        fontSize: 32,
    },
});

export { Produits }; 