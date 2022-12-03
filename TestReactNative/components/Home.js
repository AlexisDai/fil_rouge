import React from 'react';
import { useState, useEffect } from 'react';
import { Text, View, FlatList, SafeAreaView, Button } from 'react-native';





const Home = ({ navigation }) => {
    return (
        <View>
            <Button
                title="Aller aux rubriques"
                onPress={() =>
                    navigation.navigate('Rubrique')
                }
                />
            <Button
                title="Aller aux produits"
                onPress={() =>
                    navigation.navigate('Produits')
                }
            />
        </View>
    );
};

export { Home };
