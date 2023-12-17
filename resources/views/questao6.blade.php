<?php
class CarModelField {
    private $models;
    private $selectedModel;

    public function __construct($models, $selectedModel = null) {
        $this->models = $models;
        $this->selectedModel = $selectedModel;
    }

    public function render() {
        $html = '<select name="car_model">';
        foreach ($this->models as $model) {
            $selected = ($model == $this->selectedModel) ? 'selected' : '';
            $html .= "<option value='$model' $selected>$model</option>";
        }
        $html .= '</select>';
        return $html;
    }
}

$carModels = 
[
    'modelo1',
    'modelo2',
    'modelo3', 
    'modelo5'
];

$selectedCarModel = 'modelo1';

$carModelField = new CarModelField($carModels, $selectedCarModel);

echo '<p>Toda a classe está dentro do blade, para maior facilidade de leitura e entendimento.</p>';
echo '<form>';
echo 'Modelo de Carro: ' . $carModelField->render() . '<br>';
echo '</form>';