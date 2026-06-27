/*
 * Welcome to your app's main JavaScript file!
 * This file is managed by Webpack Encore.
 */

import './styles/app.css';
import React from 'react';
import { createRoot } from 'react-dom/client';

// On vérifie si un élément avec l'id "root" existe avant de lancer React
const container = document.getElementById('root');
if (container) {
    const root = createRoot(container);
    root.render(<h1>Hello de React dans Symfony ! 🚀</h1>);
}

console.log('App.js chargé avec succès via Webpack Encore !');