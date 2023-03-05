<p align="center"><a href="https://github.com/ryanxedi/git-info" target="_blank"><img src="https://raw.githubusercontent.com/ryanxedi/git-info/main/art/git-info.svg" width="400" alt="Git Branch"></a></p>

## About gitInfo

gitInfo is a simple tool to retrieve the current branch or hash of your Laravel project:

## Getting Started

Pull in the package ````composer require ryanxedi/git-info````

Make this available globally:
Add this to the bottom of your ````aliases```` array in ````config/app.php````

````
'gitInfo' => ryanxedi\gitInfo\gitInfo::class,
````


## Usage

To return your current branch

````gitInfo::branch()````

To return your current branch's hash 

````gitInfo::hash()````


## Example

Try this example blade code snippet:

Add the font-awesome CDN to your HTML header section:
````
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  rel="stylesheet" />
```` 

Presumably, you don't want this to appear in your production environment.  
You can wrap this in an @if() statement in your footer
````
@if (env('APP_ENV') != 'production')
	<i class="fa-solid fa-code-branch"></i> {{ gitInfo::branch() }}
@endif
````

Update ````'production'```` to whatever you call your production environment in you ````.env```` file

## License

gitInfo is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
