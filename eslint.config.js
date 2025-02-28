import js from '@eslint/js';
import react from 'eslint-plugin-react';
import reactHooks from 'eslint-plugin-react-hooks';
import jsxA11y from 'eslint-plugin-jsx-a11y';
import importPlugin from 'eslint-plugin-import';
import prettier from 'eslint-plugin-prettier';
import jsdoc from 'eslint-plugin-jsdoc';
import prettierConfig from 'eslint-config-prettier';

export default [
    js.configs.recommended,
    react.configs.recommended,
    reactHooks.configs.recommended,
    jsxA11y.configs.recommended,
    importPlugin.configs.recommended,
    prettierConfig,
    {
        languageOptions: {
            ecmaVersion: 'latest',
            sourceType: 'module',
        },
        plugins: {
            react,
            reactHooks,
            jsxA11y,
            import: importPlugin,
            prettier,
            jsdoc,
        },
        rules: {
            'prettier/prettier': 'error',
            'react/jsx-filename-extension': ['error', { extensions: ['.js', '.jsx'] }],
            'import/no-extraneous-dependencies': ['error', { devDependencies: true }],
            'jsdoc/check-alignment': 'warn',
            'jsdoc/check-indentation': 'warn',
            'jsdoc/check-param-names': 'warn',
            'jsdoc/require-description': 'warn',
            'jsdoc/require-param': 'warn',
            'jsdoc/require-returns': 'warn',
        },
    },
];
