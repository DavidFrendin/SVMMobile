## SVMobile ##

This is a web application (made in PHP) designed to act as a mobile friendly front-end for [SvenskaMagic.com](http://www.svenskamagic.com/).

The application uses CURL to pull website content, DOM/DOMXPATH to sort out useable content and Memcache for managing redundant calls to the remote webserver.

The general design pattern of the PHP code is MVC-based.

The front-end is HTML5 content supported by a [jQuery mobile](http://jquerymobile.com/) framework.

### Current status
Alpha - Internal development, not mature for public release.

## Requirements ##

* Apache (... or possibly IIS or other webserver supporting PHP)
	* Enabled mod_rewrite
* PHP5
	* Memcache
	* DOM
	* CURL
* MySQL

This software should be able to work in safe mode.

## License ##

    Copyright (C) 2012  David Frendin (david.frendin@gmail.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.