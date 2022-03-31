<?php

namespace Drupal\li\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for li routes.
 */
class LiController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {
    $header_title = [
      'q1' => t('q1'),
      'q2' => t('q2'),
      'q3' => t('q3'),
      'q4' => t('q4'),
      'ytd' => t('ytd'),     
    ];
    $reviews['table'] = [
      '#type' => 'table',
      '#header' => $header_title,
      '#rows' => $this->getReview(),
    ];
    
    /*
    Build form with css style
    */
    $build['content'] = [
      '#theme' => 'li-theme',
      '#attached' => [
        'library' => [
          'li/style',
        ],
      ],
      '#reviews' => $reviews,
      '#text' => $this
        ->t('Hello! You can add here a photo of your cat.'),
    ];
    
    return $build;
  }
  
  /**
   * Output of data from the database.
   */
  public function getReview(): array {
    // Database connection
    $database = \Drupal::database();
    $result = $database->select('li', 'l')
      ->fields('l', ['id','q1', 'q2', 'q3', 'q4', 'ytd'])
      ->orderBy('id', 'DESC')
      ->execute();
    $reviews = [];
    foreach ($result as $review) {
      $reviews[] = [
        'id' => $review->id,
        'q1' => $review->q1,
        'q2' => $review->q2,
        'q3' => $review->q3,
        'q4' => $review->q4,
        'ytd' => $review->ytd,
      ];
    }
    return $reviews;
  }

}
