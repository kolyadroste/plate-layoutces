<?php
namespace Atomicplan\PlateLayoutCes\Utility;
class FlexTCADefaults
{
    /**
     * Modifies the select box of orderBy-options.
     *
     * @param array &$config configuration array
     */
    public function bsColorVars(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Primary', '--bs-primary'],
            ['Secondary', '--bs-secondary'],
            ['Tertiary', '--bs-tertiary'],
            ['Quaternary', '--bs-quaternary'],
            ['Black', '--bs-black'],
            ['White', '--bs-white'],
            ['Success', '--bs-success'],
            ['Info', '--bs-info'],
            ['Warning', '--bs-warning'],
            ['Danger', '--bs-danger'],
            ['Light', '--bs-light'],
            ['Dark', '--bs-dark'],
            ['Transparent', '--bs-transparent']
        ];
    }

    public function bsHoverColorVars(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Primary', '--bs-primary-hover'],
            ['Secondary', '--bs-secondary-hover'],
            ['Tertiary', '--bs-tertiary-hover'],
            ['Quaternary', '--bs-quaternary-hover'],
            ['Black', '--bs-black-hover'],
            ['White', '--bs-white-hover'],
            ['Success', '--bs-success-hover'],
            ['Info', '--bs-info-hover'],
            ['Warning', '--bs-warning-hover'],
            ['Danger', '--bs-danger-hover'],
            ['Light', '--bs-light-hover'],
            ['Dark', '--bs-dark-hover'],
            ['Transparent', '--bs-transparent']
        ];
    }

    public function bsGapVars(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Sehr Klein', '--bs-gap-xsmall'],
            ['Klein', '--bs-gap-small'],
            ['Medium', '--bs-gap-medium'],
            ['Groß', '--bs-gap-big'],
            ['Sehr Groß', '--bs-gap-large'],
            ['XL', '--bs-gap-xlarge'],
            ['XXL', '--bs-gap-xxlarge'],
            ['Kein Abstand', '--bs-gap-0']
        ];
    }

    public function bsGapClasses(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Sehr Klein', 'gap-xsmall'],
            ['Klein', 'gap-small'],
            ['Medium', 'gap-medium'],
            ['Groß', 'gap-big'],
            ['Sehr Groß', 'gap-large'],
            ['XL', 'gap-xlarge'],
            ['XXL', 'gap-xxlarge'],
        ];
    }

    public function bsPyClasses(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Sehr Klein', 'py-xsmall'],
            ['Klein', 'py-small'],
            ['Medium', 'py-medium'],
            ['Groß', 'py-big'],
            ['Sehr Groß', 'py-large'],
            ['XL', 'py-xlarge'],
            ['XXL', 'py-xxlarge'],
            ['Kein Abstand', 'py-0'],
        ];
    }

    public function bsWidthClasses(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Volle Breite', 'full'],
            ['Schmaler', 'narrow-1'],
            ['Sehr schmal', 'narrow-2'],
        ];
    }

    public function bsPositionClasses(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Absolute', 'position-absolute'],
            ['Relative', 'position-relative'],
            ['Fixiert', 'position-fixed']
        ];
    }

    public function bsVertAlignClasses(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Links', 'align-items-start'],
            ['Center', 'align-items-center'],
            ['Rechts', 'align-items-end'],
            ['Stretch', 'align-items-stretch']
        ];
    }

    public function bsHorizAlignClasses(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Links', 'justify-content-start'],
            ['Center', 'justify-content-center'],
            ['Rechts', 'justify-content-end'],
            ['Gleichmäßig', 'justify-content-between'],
            ['Gleichmäßig verteilt', 'justify-content-around']
        ];
    }

    public function flexAlignItemsValues(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Start', 'start'],
            ['Mitte', 'center'],
            ['Ende', 'end']
        ];
    }

    public function flexJustifyContentValues(array &$config)
    {
        // simple and stupid example
        // change this to dynamically populate the list!
        $config['items'] = [
            // label, value
            ['Standard', ''],
            ['Start', 'start'],
            ['Mitte', 'center'],
            ['Ende', 'end']
        ];
    }

	public function gridDefaults2Col(array &$config)
	{
		// simple and stupid example
		// change this to dynamically populate the list!
		$config['items'] = [
			// label, value
			['Standard', ''],
			['Sehr Klein', '--bs-gap-xsmall'],
			['Klein', '--bs-gap-small'],
			['Medium', '--bs-gap-medium'],
			['Groß', '--bs-gap-big'],
			['Sehr Groß', '--bs-gap-large'],
			['XL', '--bs-gap-xlarge'],
			['XXL', '--bs-gap-xxlarge'],
			['Kein Abstand', '--bs-gap-0']
		];
	}
}