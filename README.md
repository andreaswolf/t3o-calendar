# Calendar for typo3.org

This is a fork of the old extension [cz_simple_calendar](https://github.com/czenker/cz_simple_cal) specially for typo3.org.


## Planned feature set

* Create and manage events in the frontend
  * each event is bound to one FE user (the one who created it)
  * will be published immediately
  * when a user creates their first event, an email is sent to the admins to check for spam
  * creating events is enabled for all FE users
  * creating events in the frontend is limited to certain categories
    * a user group will have certain groups enabled
* frontend output
* using categories for events
* migration of old data from typo3.org
* event model
  * title
  * description
  * categories (multiselect/tree)
  * location
  * start/end date + time
  * url (optional)
  * hashtag(s) (optional) -> for fetching Twitter feed, Flickr photos etc.
