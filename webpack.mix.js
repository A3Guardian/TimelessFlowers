const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .webpackConfig({
       module: {
           rules: [
               {
                   test: /\.m?js$/, 
                   exclude: /node_modules/,
                   use: {
                       loader: 'babel-loader'
                   }
               }
           ]
       },
       resolve: {
           fullySpecified: false,
           extensions: ['.js', '.json'] 
       }
   })
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'), 
   ])
   .version(); 
