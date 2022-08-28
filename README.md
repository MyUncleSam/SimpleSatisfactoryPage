# SimpleSatisfactoryPage
- show link to newest savegame (to download)
- Ability to open web map using latest savegame

# How?
1. add all savegames to the `savegames` subfolder
2. change public link inside index.html
3. done

# Requirements
- apache
- apache module `mod_rewrite`
- php

# Non apache
If you use different webservers than apache, you need to do this:

- modify `.htaccess`: it should redirect `https://www.domain.tld/latest.sav` to `latest.php`
- modify `savegames/htaccess`: allow index and set content to directly download (and not open as text file)
