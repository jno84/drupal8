<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 * )
 */

class HelloBlock extends BlockBase implements BlockPluginInterface {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $config = $this->getConfiguration();

    if (!empty($config['name'])) {
      $name = $config['name'];
    }
    else{
      $name = $this->t('No name');
    }
    return array(
      '#markup' => $this->t('Hello, @name!', array('@name' => $name)),
    );
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();

    $form['hello_block_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Who'),
      '#default_value' => isset($config['name']) ? $config['name'] : '',
    );

    $form['hello_block_desc'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Desc'),
      '#default_value' => isset($config['desc']) ? $config['desc'] : '',
    );

    return $form;
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->setConfigurationValue('name', $form_state->getValue('hello_block_name'));
    $this->setConfigurationValue('desc', $form_state->getValue('hello_block_desc'));
  }

  /**
   *
   */
  public function defaultConfiguration() {
    $default_config = \Drupal::config('hello_world.settings');
    return array(
      'name' => $default_config->get('hello.name'),
    );
  }

}

?>