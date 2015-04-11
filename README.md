# Whoops Overflow
Errors come directly solutions from Stack Overflow.

**Note:** This is a terrible idea for multiple reasons: Your exception message might contain private data and it's going to be sent to stack overflow servers. The exception page will come up with a bit more delay because of the additional request to the SO APIs (at least until I update this to an AJAX request). Also good luck getting errors if your internet is down.

But it's cool, so why not. Just use at your own risk.

![Whoops Overflow!](http://i.imgur.com/6RaKx96.png)

## Laravel 5

For a simple integration with Laravel 5 follow [this tutorial](https://mattstauffer.co/blog/bringing-whoops-back-to-laravel-5) by [Matt Stauffer](https://twitter.com/stauffermatt), but require this in composer:

```javascript
"casinelli/whoops-overflow" : "~1.2"
```

## Original Docs

Check out the original library (with docs) here: [filp/whoops](https://github.com/filp/whoops).
