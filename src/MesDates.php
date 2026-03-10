<?php

namespace UPJV;

/**
 * Classe MesDates pour la gestion des dates.
 */
class MesDates
{
    /**
     * Retourne la date de demain au format JSON.
     *
     * @return string
     */
    public function demain(): string
    {
        $dateDemain = new \DateTime('tomorrow');
        return json_encode([
            'demain' => $dateDemain->format('d-m-Y')
        ]);
    }
}
