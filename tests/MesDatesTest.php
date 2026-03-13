<?php

use PHPUnit\Framework\TestCase;
use UPJV\MesDates;

class MesDatesTest extends TestCase
{
    /**
     * Test pour vérifier que la méthode demain() renvoie le bon format et la bonne date.
     */
    public function testDemainRenvoiUnJsonEtLaBonneDate()
    {
        $mesDates = new MesDates();
        $resultat = $mesDates->demain();

        // Vérification 1 : Est-ce que c'est bien une chaîne JSON ?
        $this->assertJson($resultat, "Le retour doit être au format JSON.");

        // Décoder le JSON pour vérifier l'intérieur
        $data = json_decode($resultat, true);

        // Vérification 2 : Est-ce que la clé 'demain' existe ?
        $this->assertArrayHasKey('demain', $data);

        // Vérification 3 : Est-ce que la date correspond à demain (format d-m-Y) ?
        $dateAttendue = (new \DateTime('tomorrow'))->format('d-m-Y');
        $this->assertEquals($dateAttendue, $data['demain'], "La date ne correspond pas à demain.");
    }
}
