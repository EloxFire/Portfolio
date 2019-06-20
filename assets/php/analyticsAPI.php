<?php
$analytics = initializeAnalytics(); // Initialisera l'API
$profile = getFirstProfileId($analytics); // Récupère le profil Google Analytics

// Fonction d'initialisation et d'authentification
function initializeAnalytics()
{
  // Précise où trouver la clé du compte de service
  $KEY_FILE_LOCATION = '../vendor/google/keyAPI-enzo-avagliano.json';

  // Crée et configure le client
  $client = new Google_Client();
  $client->setApplicationName("Hello Analytics Reporting");
  $client->setAuthConfig($KEY_FILE_LOCATION);
  $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
  $analytics = new Google_Service_Analytics($client);
  return $analytics;
}

// Récupère le profil Google Analytics
function getFirstProfileId($analytics) {
  // Récupère la liste des comptes
  $accounts = $analytics->management_accounts->listManagementAccounts();

  if (count($accounts->getItems()) > 0) {
    $items = $accounts->getItems();
    $firstAccountId = $items[0]->getId();

    // Récupère la liste des propriétés
    $properties = $analytics->management_webproperties
    ->listManagementWebproperties($firstAccountId);

    if (count($properties->getItems()) > 0) {
      $items = $properties->getItems();
      $firstPropertyId = $items[0]->getId();

      // Récupère la liste des vues
      $profiles = $analytics->management_profiles
      ->listManagementProfiles($firstAccountId, $firstPropertyId);

      if (count($profiles->getItems()) > 0) {
        $items = $profiles->getItems();

        // Retourne l'ID de la première vue
        return $items[0]->getId();

      } else {
        throw new Exception('No views (profiles) found for this user.');
      }
    } else {
      throw new Exception('No properties found for this user.');
    }
  } else {
    throw new Exception('No accounts found for this user.');
  }
}
?>
