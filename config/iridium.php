<?php

return [
  'services' => [
      'vk' => [
          'isTrackProvider' => true,
          'isPlaylistProvider' => true,
          'isRecommendationProvider' => true,
      ],
      'lastfm' => [
          'isTrackProvider' => true,
          'isRecommendationProvider' => true,
          'isScrobblingConsumer' => true
      ],
      'dropbox' => [
          'isTrackProvider' => true,
      ],
  ]
];