module.exports = {
    plugins: [
        require('postcss-import'),
        require('postcss-nested'),
        // https://browsersl.ist/#q=%3E%3D+5%25+in+US
        require('postcss-preset-env')({ browsers: '>= 5% in US' }),
        require('cssnano'),
    ]
}