# case-converter

A factory wrapper around [jawira/case-converter](https://github.com/jawira/case-converter)

## Injectable ##

This library allows the functionality of the excellent `jawira/case-converter` to be injected as a dependency into other classes.

```
final class SomethingThatNeedsToConvertCase
{
  private $caseConverter;
  private $defaultSuffix;
  
  public function __construct(CaseConverter $caseConverter, string $defaultSuffix)
  {
    $this->caseConverter = $caseConverter;
    $this->defaultSuffix = $defaultSuffix;
  }
  
  public function usesTheConverter(string $aStringFromSomethingElse): string
  {
    $this->caseConverter->from($aStringFromSomethingElse)->toCamel() . $this->defaultSuffix;
  }
}
```

## Testable/mockable ##

The library allows the case conversion dependency to be mocked so classes can be more easily tested.
