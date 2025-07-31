# Laravel Helper Attributes

This is a Laravel package that is meant to add simple, useful, drop-in helper attributes to code

## Main Attributes

- #[Memoize] - This will memoize the current function/method
- #[Cache(ttl: 600, prefix: "example_")] - Cache the current function/method for the specified ttl, with the given prefix, and potentially other options
- #[Log(level: "info")] - Log the result of the current function/method
- #[Time] - Log the execution time of the current function/method
- #[Retry(times: 3, delayMs: 100)] - Retry the current function/method [n]-times if it throws
- #[Transaction] - Wrap the given operation in a DB transaction
- #[WarnIfSlow(thresholdMs: 50)] - Log a warning if the given operation exceeds a given ms threshold

## Usage Examples

<!-- The given code will execute User::all() only once per request lifecycle -->
```php
#[Memoize]
public function getUsers(): Collection
{
    return User::all();
}
```

<!-- The given code will log the amount of time that it takes to complete -->
```php
#[Time]
public function fib(int $n): int {
    return $n <= 1 ? $n : $this->fib($n - 1) + $this->fib($n - 2);
}
```

## Notes

This should be a Laravel package. This needs to be registered globally to the application via a service provider and implemented completely transparently. It should NOT require the user to do anything other than drop PHP attributes into their code. No setup should be required other than adding the package.