const NODE_ENV = process.env.NODE_ENV || 'development';

const webpack = require('webpack');
const autoprefixer = require('autoprefixer');

const glob = require('glob');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const WebpackNotifierPlugin = require('webpack-notifier');
const CssoWebpackPlugin = require('csso-webpack-plugin').default;
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const commonPlugins = [
  new WebpackNotifierPlugin(),
  new ExtractTextPlugin({
    filename: 'css/style.css',
    allChunks: true,
  }),
  new webpack.optimize.CommonsChunkPlugin({
    name: 'common',
    minChunks: 2,
  }),
];


module.exports = {
  entry: {
    main: './src/js/main.js'
  },
  output: {
    path: __dirname + '/dist',
    publicPath: '/dist/',
    filename: 'js/[name].js',
  },
  watch: NODE_ENV === 'development',
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        options: {
          presets: [['es2015'], ['stage-3']],
        },
      },
      {
        test: /\.scss$/,
        loader: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [{
            loader: 'css-loader',
            options: {
              minimize: NODE_ENV !== 'development',
            },
          }, {
            loader: 'postcss-loader',
            options: {
              plugins: () => [
                autoprefixer({ browsers: ['last 3 versions', 'IE > 9', 'Safari 9.1'] }),
              ],
            },
          }, {
            loader: 'sass-loader',
          }],
        }),
      },
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader'],
      },
    ],
  },
  plugins: NODE_ENV === 'development' ? commonPlugins : [...commonPlugins,
    new CssoWebpackPlugin({ sourceMap: true }),
    new UglifyJsPlugin({
      beautify: false,
      comments: false,
      compress: {
        sequences: true,
        booleans: true,
        loops: true,
        unused: true,
        warnings: false,
        drop_console: true,
        unsafe: true,
      },
    }),
  ],
};
