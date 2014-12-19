Feature: behat test
  In order to find modules on Drupal
  As user
  I need to be able to use the search

  #@javascript
  Scenario: Searching for "behat"
    Given I go to "http://drupal.org"
    When I fill in "Search Drupal.org" with "behat"
    And I press "Search"
    Then I should see "Behat Drupal Extension"