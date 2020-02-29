module.exports = {
  env: {
    browser: true,
		jquery: true,
		commonjs: true,
    es6: true,
    node: true
  },
  extends: ["eslint:recommended", "wordpress"],
  parserOptions: {
    sourceType: "module"
  },
  rules: {
    indent: ["error", "tab"],
    "linebreak-style": ["error", "unix"],
    quotes: ["error", "single"],
    semi: ["error", "always"]
  }
};
