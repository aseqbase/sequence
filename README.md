# A New Sequence (Project)
> aseqbase/sequence

The task at hand involves the establishment of a novel subdomain, fully equipped and configured for seamless accessibility, as an extension to an existing aseqbase website. This entails not only the creation of the subdomain itself, but also ensuring that all necessary infrastructure, software, and hardware are in place to support its intended function. Furthermore, meticulous attention must be paid to accessibility considerations, guaranteeing that the new subdomain is usable by individuals with diverse needs and abilities. The ultimate goal is to seamlessly integrate this new subdomain into the existing aseqbase website ecosystem, providing a fully functional and readily accessible platform for its designated purpose.

## Dependencies
* <a href="http://github.com//aseqbase/aseqbase">aseqbase/aseqbase</a>
<h2>Managements</h2>
<h3>Installing</h3>

  1. Install all dependencies mentioned before
  2. Follow one of these options:
		* Open a terminal in the destination directory (for example, `D:\MyWebsite\sequence\`) of the website, then install the project by:
			``` bash
			> composer create-project aseqbase/sequence
			```
		* Prompts below to create a manageable project (update, uninstall, etc.):
			``` bash
			> composer require aseqbase/sequence
			> cd vendor/aseqbase/sequence
			vendor/aseqbase/sequence> composer dev:install
			```
  3. Put the destination directory of your project on the appeared step (for example, `D:\MyWebsite\sequence\`)
		``` bash
		Destination Directory [D:\MyWebsite\]: D:\MyWebsite\sequence\
		```
  4. Follow the steps to finish the installation of sources, database, etc.
  5. [optional] On the local server, create an optional file named `global.php` in the `sequence` directory  to change your-parent-directory-name (from the `.aseq`) using:
		``` bash
		> composer sequence:create global --aseq "sequence" --base "your-parent-directory-name" -f
		```
		or
		``` bash
		> cd vendor/aseqbase/sequence
		vendor/aseqbase/sequence> composer dev:create global --aseq "sequence" --base "your-parent-directory-name" -f
		```
		**Note**: Do not forget to replace "your-parent-directory-name" with your item (default `.aseq`). 
  6. Enjoy...

<h3>Using</h3>

  1. Do one of the following options:
	  	* Visit its special URL (for example, `http://sequence.[my-domain-name].com`, or `http://[my-domain-name].com/sequence`)
		* On the local server:
			1. Use the following command on the root directory
				``` bash
				> composer start
		  		```
		  	2. Visit the URL `localhost:8000` (for default) on the local browser
  2. Enjoy...

<h3>Updating</h3>

  1. Keep your project updated using
		``` bash
		> composer sequence:update
		```
		or
		``` bash
  		> cd vendor/aseqbase/sequence
		vendor/aseqbase/sequence> composer dev:update
		```
  2. Follow the steps to finish the update of sources, database, etc.
  3. Enjoy...

<h3>Uninstalling</h3>

  1. Uninstall the project and the constructed database using:
		``` bash
		> composer sequence:unistall
		```
		or
		``` bash
  		> cd vendor/aseqbase/sequence
		vendor/aseqbase/sequence> composer dev:unistall
		```
  2. Follow the steps to finish the uninstallation of sources, database, etc.
  3. Enjoy...

<h4>Creating</h4>

  1. Create a new file by a predefined template name (for example, global, config, back, router, front, user, info, etc.) using:
		``` bash
		> composer sequence:create [predefined-template-name]
		```
		or
		``` bash
  		> cd vendor/aseqbase/sequence
		vendor/aseqbase/sequence> composer dev:create [predefined-template-name]
		```
  2. Follow the steps to finish creating the file.
  3. Enjoy...
