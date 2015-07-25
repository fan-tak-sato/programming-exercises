PHP Reflection Class
================================

When should we use Reflection?

- Dynamic typing is probably impossible without reflection.
- Aspect Oriented Programming listens from method calls and places code around methods, all accomplished with reflection.
- PHPUnit relies heavily on reflection, as do other mocking frameworks.
- Web frameworks in general use reflection for different purposes. Some use it to initialize models, constructing objects for views and more. Laravel makes heavy use of reflection to inject dependencies.
- Metaprogramming, like our last example, is hidden reflection.
- Code analysis frameworks use reflection to understand your code.

