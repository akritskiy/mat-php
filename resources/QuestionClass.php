<?php
class Question
{
	public $num;
	public $text;
	public $options;

	public function __construct($num, $text, $options)
	{
		$this->num = $num;
		$this->text = $text;
		$this->options = $options;
	}

	function renderQuestionToDOM() // Renders question to DOM as a radio btn group
	{
		$num = $this->num;
		$text = $this->text;
		$options = $this->options;

		$html = "<h5>$num. $text</h5>";
		foreach ($options as $option) {
			$key = array_search($option, $options);
			$checked = null;
			if ($key == 0) $checked = "checked";
			$radioBtn = "
        <div class='form-check'>
          <input class='form-check-input' type='radio' name='Q$num' id='Q$num $option' value='$option' $checked>
          <label class='form-check-label' for='Q$num $option'>$option</label>
        </div>
      ";
			$html = $html . $radioBtn;
		}
		return $html;
	}
}
