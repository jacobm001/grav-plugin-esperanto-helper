# Esperanto Helper Plugin

The **Esperanto Helper** Plugin is for [Grav CMS](http://github.com/getgrav/grav). In its current state, the plugin will replace *x notation* characters with their unicode equivalents during the render process. This will **not** change the source markdown files, merely the text as it is rendered.

### Currently Supported Characters: 

- `cx` => `\u{0109}`
- `CX` => `\u{0108}`
- `gx` => `\u{011d}`
- `GX` => `\u{011c}`
- `hx` => `\u{0125}`
- `HX` => `\u{0124}`
- `jx` => `\u{0135}`
- `JX` => `\u{0134}`
- `sx` => `\u{015d}`
- `SX` => `\u{015c}`
- `ux` => `\u{016d}`
- `UX` => `\u{016c}`

## Installation

Installing the Esperanto Helper plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install esperanto-helper

This will install the Esperanto Helper plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/esperanto-helper`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `esperanto-helper`. You can find these files on [GitHub](https://github.com/jacob-mastel/grav-plugin-esperanto-helper) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/esperanto-helper
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/esperanto-helper/esperanto-helper.yaml` to `user/config/plugins/esperanto-helper.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage

This plugin will automatically search the raw text of you webpage looking for Esperanto's standard [*x notation*](http://www.esperanto.net/veb/faq-15.html). Simply typing the desired character in x notation will automatically be rendered to its appropriate unicode character. 

**Note:** To produce a capital letter, but the letter **and** the *x* must be capitalized.

## To Do

- [x] Support standard *x notation* characters
- [ ] Add in support for *h notation* characters
- [ ] Look into support for an Esperanto spell checker to embed in the admin interface

