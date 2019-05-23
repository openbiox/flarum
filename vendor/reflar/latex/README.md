# LaTeX by ReFlar

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/reflar/latex.svg)](https://packagist.org/packages/reflar/latex)

A [Flarum](http://flarum.org) extension to render LaTeX expressions in your posts.

Original by [Flagrow](https://github.com/Flagrow).

### Installation

Use [Bazaar](https://discuss.flarum.org/d/5151-flagrow-bazaar-the-extension-marketplace) or install manually with composer:

```bash
composer require reflar/latex
```

### Updating

```bash
composer update reflar/latex
php flarum cache:clear
```

### Features

With reflar/latex you can render LaTeX mathematical expressions inside your forum just by typing them, in **the same way** you would do your TeX document.

It supports:
- Inline expressions like `$\sin\theta$`, as well as
- Display expressions, such as `$$\frac{\cos(kx)}{\cos(x)}$$`.

There's also an option so it doesn't mess up with **Markdown** and **BBCode** extensions, so you can use all of them at the same time.

This is how the previous paragraph would look like:

![Imgur](http://i.imgur.com/BhEIDD0.png "This is how the previous paragraph would look like")


### Usage

Write LaTeX expressions in your post like you would in your TeX editor.

### Tip
If you want to actually **show** the LaTeX code, you must use Markdown in the following way:

    This is an expression I don't want to render
    ```
    $$\cos(\pi) + 1 = 0$$
    ```
    While this is going to be rendered: $yes$

### Links

- [Packagist](https://packagist.org/packages/reflar/latex)
- [Original by Flagrow](https://github.com/flagrow/latex)
