# Symfony 2 integration for BcMath Wrapper

## Installation

Composer: add the **webit/bcmath-bundle** into **composer.json**

```json
{
    "require": {
        "php": ">=5.3.2",
        "webit/bcmath-bundle": "~1.0"
    }
}

## Usage

You can set the default **BcMathNumber** calculation scale (*config.yml*):

```yaml
webit_bc_math:
    scale: 10 #default to 8
```

Documentation of **BcMath Wrapper**: 
[README.md](https://github.com/dbojdo/bcmath-bundle/blob/master/README.md)
