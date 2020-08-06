---
section: content
title: Beachside Restaurant 
date: 2020-03-05
description: Beachside Restaurant project - give me some short details about this project and what makes it interesting
categories: [configuration, feature]
featured: true
cover_image: https://gretschduojet1.github.io/lcc-builders/assets/images/gallery/beachside_restaurant/lcc_builders_gallery_5.jpg
---

This starter template includes a custom __404 Not Found__ error page, located at `/source/404.blade.php`. [To preview the 404 page](/404), you can visit `/404` in your browser.

```html
<!-- source/404.blade.php -->

@extends('_layouts.master')

@section('body')
    <div class="flex flex-col items-center text-gray-700 mt-32">
        <h1 class="text-6xl font-light leading-none mb-2">404</h1>

        <h2 class="text-3xl">Page not found.</h2>

        <hr class="block w-full max-w-sm mx-auto border my-8">

        <p class="text-xl">
            Need to update this page? See the <a title="404 Page Documentation" href="https://jigsaw.tighten.co/docs/custom-404-page/">Jigsaw documentation</a>.
        </p>
    </div>
@endsection
```

---

Depending on where your site is hosted, you may need to configure your server to use the custom 404 page. For more details, visit the [Jigsaw documentation about configuring a custom 404 page](https://jigsaw.tighten.co/docs/custom-404-page/).
