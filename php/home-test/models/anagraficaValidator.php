<?php

/**
 * Validate anagrafica form data
 */
class ModelAnagraficaValidator {

    /**
     * Return an error if the form is not correct
     *
     * @param $formData
     *
     * @return array|bool
     */
    public function validateFormData($formData) {
        $error = array();
        if (empty($formData['nome'])) {
            $error[] = "Inserisci il nome";
        }

        if (empty($formData['cognome'])) {
            $error[] = "Inserisci il cognome";
        }

        if (empty($formData['email'])) {
            $error[] = "Inserisci indirizzo email";
        } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Inserisci un indirizzo email valido";
        }

        return (empty($error)) ? false : $error;
    }
}