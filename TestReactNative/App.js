/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow strict-local
 */

import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import React from 'react';
import { useState, useEffect } from 'react';
import { Rubrique } from './components/rubrique';
import { Text, View, FlatList, SafeAreaView, Button } from 'react-native';
import { Home } from './components/Home';
import { Produits } from './components/produits';


const Stack = createNativeStackNavigator();

const App = () => {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen
          name="Accueil"
          component={Home}
          />
        <Stack.Screen
          name='Rubrique'
          component={Rubrique}
        />
        <Stack.Screen
          name='Produits'
          component={Produits}
        />
      </Stack.Navigator>
    </NavigationContainer>
  );
};


export default App;
