var gulp = require('flarum-gulp');

gulp({
    modules: {
        'reflar/latex': [
            'src/**/*.js'
        ]
    }
});
