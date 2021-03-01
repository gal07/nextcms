/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

/**
 * @fileOverview Defines the {@link CKEDITOR.lang} object, for the
 * Gujarati language.
 */

/**#@+
   @type String
   @example
*/

/**
 * Contains the dictionary of language entries.
 * @namespace
 */
CKEDITOR.lang[ 'gu' ] = {
	// ARIA description.
	editor: 'રીચ ટેક્ષ્ત્ એડીટર',
	editorPanel: 'વધુ વિકલ્પ વાળુ એડિટર',

	// Common messages and labels.
	common: {
		// Screenreader titles. Please note that screenreaders are not always capable
		// of reading non-English words. So be careful while translating it.
		editorHelp: 'મદદ માટ ALT 0 દબાવો',

		browseServer: 'સર્વર બ્રાઉઝ કરો',
		url: 'URL',
		protocol: 'પ્રોટોકૉલ',
		upload: 'અપલોડ',
		uploadSubmit: 'આ સર્વરને મોકલવું',
		image: 'ચિત્ર',
		flash: 'ફ્લૅશ',
		form: 'ફૉર્મ/પત્રક',
		checkbox: 'ચેક બોક્સ',
		radio: 'રેડિઓ બટન',
		textField: 'ટેક્સ્ટ ફીલ્ડ, શબ્દ ક્ષેત્ર',
		textarea: 'ટેક્સ્ટ એરિઆ, શબ્દ વિસ્તાર',
		hiddenField: 'ગુપ્ત ક્ષેત્ર',
		button: 'બટન',
		select: 'પસંદગી ક્ષેત્ર',
		imageButton: 'ચિત્ર બટન',
		notSet: '<સેટ નથી>',
		id: 'Id',
		name: 'નામ',
		langDir: 'ભાષા લેખવાની પદ્ધતિ',
		langDirLtr: 'ડાબે થી જમણે (LTR)',
		langDirRtl: 'જમણે થી ડાબે (RTL)',
		langCode: 'ભાષા કોડ',
		longDescr: 'વધારે માહિતી માટે URL',
		cssClass: 'સ્ટાઇલ-શીટ ક્લાસ',
		advisoryTitle: 'મુખ્ય મથાળું',
		cssStyle: 'સ્ટાઇલ',
		ok: 'ઠીક છે',
		cancel: 'રદ કરવું',
		close: 'બંધ કરવું',
		preview: 'જોવું',
		resize: 'ખેંચી ને યોગ્ય કરવું',
		generalTab: 'જનરલ',
		advancedTab: 'અડ્વાન્સડ',
		validateNumberFailed: 'આ રકમ આકડો નથી.',
		confirmNewPage: 'સવે કાર્ય વગરનું ફકરો ખોવાઈ જશે. તમને ખાતરી છે કે તમને નવું પાનું ખોલવું છે?',
		confirmCancel: 'ઘણા વિકલ્પો બદલાયા છે. તમારે આ બોક્ષ્ બંધ કરવું છે?',
		options: 'વિકલ્પો',
		target: 'લક્ષ્ય',
		targetNew: 'નવી વિન્ડો (_blank)',
		targetTop: 'ઉપરની વિન્ડો (_top)',
		targetSelf: 'એજ વિન્ડો (_self)',
		targetParent: 'પેરનટ વિન્ડો (_parent)',
		langDirLTR: 'ડાબે થી જમણે (LTR)',
		langDirRTL: 'જમણે થી ડાબે (RTL)',
		styles: 'શૈલી',
		cssClasses: 'શૈલી કલાસીસ',
		width: 'પહોળાઈ',
		height: 'ઊંચાઈ',
		align: 'લાઇનદોરીમાં ગોઠવવું',
		alignLeft: 'ડાબી બાજુ ગોઠવવું',
		alignRight: 'જમણી',
		alignCenter: 'મધ્ય સેન્ટર',
		alignJustify: 'બ્લૉક, અંતરાય જસ્ટિફાઇ',
		alignTop: 'ઉપર',
		alignMiddle: 'વચ્ચે',
		alignBottom: 'નીચે',
		alignNone: 'કઇ નહી',
		invalidValue: 'અનુચિત મૂલ્ય',
		invalidHeight: 'ઉંચાઈ એક આંકડો હોવો જોઈએ.',
		invalidWidth: 'પોહળ ઈ એક આંકડો હોવો જોઈએ.',
		invalidCssLength: '"%1" ની વેલ્યુ એક પોસીટીવ આંકડો હોવો જોઈએ અથવા CSS measurement unit (px, %, in, cm, mm, em, ex, pt, or pc) વગર.',
		invalidHtmlLength: '"%1" ની વેલ્યુ એક પોસીટીવ આંકડો હોવો જોઈએ અથવા HTML measurement unit (px or %) વગર.',
		invalidInlineStyle: 'ઈનલાઈન  સ્ટાઈલ ની વેલ્યુ  "name : value" ના ફોર્મેટ માં હોવી જોઈએ, વચ્ચે સેમી-કોલોન જોઈએ.',
		cssLengthTooltip: 'પિક્ષ્લ્ નો આંકડો CSS unit (px, %, in, cm, mm, em, ex, pt, or pc) માં નાખો.',

		// Put the voice-only part of the label in the span.
		unavailable: '%1<span class="cke_accessibility">, નથી મળતું</span>',

		// Keyboard keys translations used for creating shortcuts descriptions in tooltips, context menus and ARIA labels.
		keyboard: {
			8: 'Backspace કી',
			13: 'Enter કી',
			16: 'Shift કી',
			17: 'Ctrl કી',
			18: 'Alt કી',
			32: 'Space કી',
			35: 'End કી',
			36: 'Home કી',
			46: 'Delete કી',
			224: 'Command કી'
		},

		// Prepended to ARIA labels with shortcuts.
		keyboardShortcut: 'કીબોર્ડ શૉર્ટકટ',

		optionDefault: 'Default' // MISSING
	}
};