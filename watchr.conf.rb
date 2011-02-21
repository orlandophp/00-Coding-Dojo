###
 # This script requires a Ruby gem called "watchr", which installs
 # a small command-line script by the same name. On Mac OS X, also
 # consider installing the "ruby-fsevent"
 ##

watch('.*\.php$'){ system "clear && phpunit test.php" }
