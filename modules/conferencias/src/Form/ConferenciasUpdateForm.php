<?php

namespace Drupal\conferencias\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Html;
use Drupal\conferencias\Dao\ConferenciasDao;

class ConferenciasUpdateForm extends FormBase
{

	protected $id;

	function getFormID() {
		return 'bd_conferencias_update';
	}

	function buildForm(array $form, FormStateInterface $form_state, $id = '') {
		$this->id = $id;
		$pregunta = db_query("SELECT * FROM {conferencias} WHERE id = :id", array(':id' => $id))->fetchObject();
		$form['titulo'] = array(
		  '#type' => 'textfield',
		  '#title' => t('Titulo'),
		  '#default_value' => $pregunta->titulo,
		);
		$form['resumen'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Resumen'),
		  '#default_value' => $pregunta->resumen,
		);
        $form['fecha'] = array(
            '#type' => 'date',
            '#title' => t('Fecha'),
            '#default_value' => $pregunta->fecha,
        );
        $form['lugar'] = array(
            '#type' => 'textfield',
            '#title' => t('Lugar'),
            '#default_value' => $pregunta->lugar,
        );
        $form['hora'] = array(
            '#type' => 'textfield',
            '#title' => t('Hora'),
            '#default_value' => $pregunta->hora,
        );
        $form['nombre'] = array(
            '#type' => 'textfield',
            '#title' => t('Nombre'),
            '#default_value' => $pregunta->nombre,
        );
        $form['curriculum'] = array(
            '#type' => 'textarea',
            '#title' => t('Curriculum'),
            '#default_value' => $pregunta->curriculum,
        );
		$form['actions'] = array('#type' => 'actions');
		$form['actions']['submit'] = array(
		  '#type' => 'submit',
		  '#value' => t('Guardar'),
		);
		return $form;
	}

	function validateForm(array &$form, FormStateInterface $form_state) {

	    if (strlen($form_state->getValue('titulo')) <= 0) {
            $form_state->setErrorByName('titulo', $this->t('Please enter Titulo'));
        }
        if (strlen($form_state->getValue('resumen')) <= 0) {
            $form_state->setErrorByName('resumen', $this->t('Please enter Resumen'));
        }
        if (strlen($form_state->getValue('fecha')) <= 0) {
            $form_state->setErrorByName('fecha', $this->t('Please enter Fecha'));
        }
        if (strlen($form_state->getValue('lugar')) <= 0) {
            $form_state->setErrorByName('lugar', $this->t('Please enter Lugar'));
        }
        if (strlen($form_state->getValue('hora')) <= 0) {
            $form_state->setErrorByName('hora', $this->t('Please enter Hora'));
        }
        if (strlen($form_state->getValue('nombre')) <= 0) {
            $form_state->setErrorByName('nombre', $this->t('Please enter Nombre'));
        }
        if (strlen($form_state->getValue('curriculum')) <= 0) {
            $form_state->setErrorByName('curriculum', $this->t('Please enter Curriculum'));
        }

    }

	function submitForm(array &$form, FormStateInterface $form_state) {
        $titulo = $form_state->getValue('titulo');
        $resumen = $form_state->getValue('resumen');
        $fecha= $form_state->getValue('fecha');
        $lugar = $form_state->getValue('lugar');
        $hora = $form_state->getValue('hora');
        $nombre = $form_state->getValue('nombre');
        $curriculum = $form_state->getValue('curriculum');

        ConferenciasDao::update($this->id,Html::escape($titulo), Html::escape($resumen), Html::escape($fecha), Html::escape($lugar), Html::escape($hora), Html::escape($nombre), Html::escape($curriculum));

		drupal_set_message(t('Tu pregunta ha sido actualizada.'));
		$form_state->setRedirect('conferenciasList');
		return;
	}
}