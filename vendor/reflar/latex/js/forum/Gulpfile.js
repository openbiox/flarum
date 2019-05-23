var gulp = require('flarum-gulp');

gulp({
    files: [
        'node_modules/katex/dist/katex.min.js',
        'node_modules/katex/dist/contrib/auto-render.min.js'
    ],
    modules: {
        'reflar/latex': [
            'src/**/*.js'
        ]
    }
});
