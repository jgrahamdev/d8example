<?php

/**
 * @file
 * Contains \Drupal\d8example\Forms\d8exampleForms.
 */

namespace Drupal\d8example\Forms;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an example form.
 */
class d8exampleForms extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'd8example_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = array(
      '#type' => 'textfield',
      '#required' => TRUE,
      '#title' => $this->t("Name"),
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (!strlen($form_state->getValue('name'))) {
      $form_state->setErrorByName('name', $this->t('Name field is required.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t("Form Submitted. Your Name is @name", array('@name' => $form_state->getValue('name'))));
  }

}
