<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f3c76b551c2c001d5c45ce4dbf98fffc68601750fa231293fea6bebfa9d12c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7236098753ff2a68f8953e2f32cba812dcb2f1697362a1e08a7e5db21d3f272f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7236098753ff2a68f8953e2f32cba812dcb2f1697362a1e08a7e5db21d3f272f->enter($__internal_7236098753ff2a68f8953e2f32cba812dcb2f1697362a1e08a7e5db21d3f272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_863e0cb897d31e39b1727317f58a68b7cc2179ab0a7dafa446331fe62d435ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863e0cb897d31e39b1727317f58a68b7cc2179ab0a7dafa446331fe62d435ee6->enter($__internal_863e0cb897d31e39b1727317f58a68b7cc2179ab0a7dafa446331fe62d435ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_7236098753ff2a68f8953e2f32cba812dcb2f1697362a1e08a7e5db21d3f272f->leave($__internal_7236098753ff2a68f8953e2f32cba812dcb2f1697362a1e08a7e5db21d3f272f_prof);

        
        $__internal_863e0cb897d31e39b1727317f58a68b7cc2179ab0a7dafa446331fe62d435ee6->leave($__internal_863e0cb897d31e39b1727317f58a68b7cc2179ab0a7dafa446331fe62d435ee6_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3c97ca9fd87d347be282a3f4b3208e71447d4b6059aca6f95e3ace74beb68364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c97ca9fd87d347be282a3f4b3208e71447d4b6059aca6f95e3ace74beb68364->enter($__internal_3c97ca9fd87d347be282a3f4b3208e71447d4b6059aca6f95e3ace74beb68364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_4bdbacdc68306aa981e228708c5112ed4109618c2d305b00c4f0dda3ea7b0faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdbacdc68306aa981e228708c5112ed4109618c2d305b00c4f0dda3ea7b0faa->enter($__internal_4bdbacdc68306aa981e228708c5112ed4109618c2d305b00c4f0dda3ea7b0faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4bdbacdc68306aa981e228708c5112ed4109618c2d305b00c4f0dda3ea7b0faa->leave($__internal_4bdbacdc68306aa981e228708c5112ed4109618c2d305b00c4f0dda3ea7b0faa_prof);

        
        $__internal_3c97ca9fd87d347be282a3f4b3208e71447d4b6059aca6f95e3ace74beb68364->leave($__internal_3c97ca9fd87d347be282a3f4b3208e71447d4b6059aca6f95e3ace74beb68364_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_1fc8d4982db379cd22b54078adbbd32aba973cd1a40631f6ff7e68fbcd98e30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc8d4982db379cd22b54078adbbd32aba973cd1a40631f6ff7e68fbcd98e30d->enter($__internal_1fc8d4982db379cd22b54078adbbd32aba973cd1a40631f6ff7e68fbcd98e30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a16b47f54471b24fe6f6fe904ac367a0870409b2d537ef8046b20fcb72ff707d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16b47f54471b24fe6f6fe904ac367a0870409b2d537ef8046b20fcb72ff707d->enter($__internal_a16b47f54471b24fe6f6fe904ac367a0870409b2d537ef8046b20fcb72ff707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a16b47f54471b24fe6f6fe904ac367a0870409b2d537ef8046b20fcb72ff707d->leave($__internal_a16b47f54471b24fe6f6fe904ac367a0870409b2d537ef8046b20fcb72ff707d_prof);

        
        $__internal_1fc8d4982db379cd22b54078adbbd32aba973cd1a40631f6ff7e68fbcd98e30d->leave($__internal_1fc8d4982db379cd22b54078adbbd32aba973cd1a40631f6ff7e68fbcd98e30d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1db60e2d872849b93d2dd00fc71fc6bd1d0e8a3d14c01bbd1811ca34907c6c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db60e2d872849b93d2dd00fc71fc6bd1d0e8a3d14c01bbd1811ca34907c6c79->enter($__internal_1db60e2d872849b93d2dd00fc71fc6bd1d0e8a3d14c01bbd1811ca34907c6c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a9b7f83a500974d7449b0ad348f179c54485d036c03a209d4d33c04b6941b808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b7f83a500974d7449b0ad348f179c54485d036c03a209d4d33c04b6941b808->enter($__internal_a9b7f83a500974d7449b0ad348f179c54485d036c03a209d4d33c04b6941b808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a9b7f83a500974d7449b0ad348f179c54485d036c03a209d4d33c04b6941b808->leave($__internal_a9b7f83a500974d7449b0ad348f179c54485d036c03a209d4d33c04b6941b808_prof);

        
        $__internal_1db60e2d872849b93d2dd00fc71fc6bd1d0e8a3d14c01bbd1811ca34907c6c79->leave($__internal_1db60e2d872849b93d2dd00fc71fc6bd1d0e8a3d14c01bbd1811ca34907c6c79_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_27031102fc723d7ed47f66da9c41bf8d09dbab1485a0c1b52c06a7220f881638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27031102fc723d7ed47f66da9c41bf8d09dbab1485a0c1b52c06a7220f881638->enter($__internal_27031102fc723d7ed47f66da9c41bf8d09dbab1485a0c1b52c06a7220f881638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_698604f1c0a79992f28aa382e30cf719c71d64d6032945417ce25c1aa4f9df50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698604f1c0a79992f28aa382e30cf719c71d64d6032945417ce25c1aa4f9df50->enter($__internal_698604f1c0a79992f28aa382e30cf719c71d64d6032945417ce25c1aa4f9df50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_f4b26e8fd565ab97e2154f98dbd9664324a3c896c132102807aa77e46e8220a6 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_470d1032050f1db411db616f47f1dde48de1eaa17f83964f369a6641ab7009ac = "{{") && ('' === $__internal_470d1032050f1db411db616f47f1dde48de1eaa17f83964f369a6641ab7009ac || 0 === strpos($__internal_f4b26e8fd565ab97e2154f98dbd9664324a3c896c132102807aa77e46e8220a6, $__internal_470d1032050f1db411db616f47f1dde48de1eaa17f83964f369a6641ab7009ac)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_698604f1c0a79992f28aa382e30cf719c71d64d6032945417ce25c1aa4f9df50->leave($__internal_698604f1c0a79992f28aa382e30cf719c71d64d6032945417ce25c1aa4f9df50_prof);

        
        $__internal_27031102fc723d7ed47f66da9c41bf8d09dbab1485a0c1b52c06a7220f881638->leave($__internal_27031102fc723d7ed47f66da9c41bf8d09dbab1485a0c1b52c06a7220f881638_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e884fc151cd28f2b5b32600567c36c6854f5567c479813f1667a857b4b2c3ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e884fc151cd28f2b5b32600567c36c6854f5567c479813f1667a857b4b2c3ec4->enter($__internal_e884fc151cd28f2b5b32600567c36c6854f5567c479813f1667a857b4b2c3ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2a29afbc52042ec537eb069339d5f2df21b60c976542cf3f2baa97a2f2270222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a29afbc52042ec537eb069339d5f2df21b60c976542cf3f2baa97a2f2270222->enter($__internal_2a29afbc52042ec537eb069339d5f2df21b60c976542cf3f2baa97a2f2270222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_2a29afbc52042ec537eb069339d5f2df21b60c976542cf3f2baa97a2f2270222->leave($__internal_2a29afbc52042ec537eb069339d5f2df21b60c976542cf3f2baa97a2f2270222_prof);

        
        $__internal_e884fc151cd28f2b5b32600567c36c6854f5567c479813f1667a857b4b2c3ec4->leave($__internal_e884fc151cd28f2b5b32600567c36c6854f5567c479813f1667a857b4b2c3ec4_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_96ca38676185370a2f53bc7e3649746fa573730ecc1b40927db314707b9b2cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ca38676185370a2f53bc7e3649746fa573730ecc1b40927db314707b9b2cdd->enter($__internal_96ca38676185370a2f53bc7e3649746fa573730ecc1b40927db314707b9b2cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_dc0156e3a512944a574c10909913e2b3342ae27c9a794ad1e3fb5960df47b8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0156e3a512944a574c10909913e2b3342ae27c9a794ad1e3fb5960df47b8c6->enter($__internal_dc0156e3a512944a574c10909913e2b3342ae27c9a794ad1e3fb5960df47b8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_dc0156e3a512944a574c10909913e2b3342ae27c9a794ad1e3fb5960df47b8c6->leave($__internal_dc0156e3a512944a574c10909913e2b3342ae27c9a794ad1e3fb5960df47b8c6_prof);

        
        $__internal_96ca38676185370a2f53bc7e3649746fa573730ecc1b40927db314707b9b2cdd->leave($__internal_96ca38676185370a2f53bc7e3649746fa573730ecc1b40927db314707b9b2cdd_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_04d67fcb1cae06bebcc5e44b0da8ec01f42dbc4e73a32707e4a295c21e074e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d67fcb1cae06bebcc5e44b0da8ec01f42dbc4e73a32707e4a295c21e074e03->enter($__internal_04d67fcb1cae06bebcc5e44b0da8ec01f42dbc4e73a32707e4a295c21e074e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_8f0691e8168e0f9bc3a2d186358e1bdf7ac78a0a1bf20e32395f5e4b1ed769f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0691e8168e0f9bc3a2d186358e1bdf7ac78a0a1bf20e32395f5e4b1ed769f4->enter($__internal_8f0691e8168e0f9bc3a2d186358e1bdf7ac78a0a1bf20e32395f5e4b1ed769f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_8f0691e8168e0f9bc3a2d186358e1bdf7ac78a0a1bf20e32395f5e4b1ed769f4->leave($__internal_8f0691e8168e0f9bc3a2d186358e1bdf7ac78a0a1bf20e32395f5e4b1ed769f4_prof);

        
        $__internal_04d67fcb1cae06bebcc5e44b0da8ec01f42dbc4e73a32707e4a295c21e074e03->leave($__internal_04d67fcb1cae06bebcc5e44b0da8ec01f42dbc4e73a32707e4a295c21e074e03_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b24d6eb6b19cd90eeea66280895da8bbd97dcf11ba8197643c6929d0b1175e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24d6eb6b19cd90eeea66280895da8bbd97dcf11ba8197643c6929d0b1175e93->enter($__internal_b24d6eb6b19cd90eeea66280895da8bbd97dcf11ba8197643c6929d0b1175e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a3c47d04797d8ea4d75ff2f912ccd749501de2a6759fb6a969140c078549586c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c47d04797d8ea4d75ff2f912ccd749501de2a6759fb6a969140c078549586c->enter($__internal_a3c47d04797d8ea4d75ff2f912ccd749501de2a6759fb6a969140c078549586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_a3c47d04797d8ea4d75ff2f912ccd749501de2a6759fb6a969140c078549586c->leave($__internal_a3c47d04797d8ea4d75ff2f912ccd749501de2a6759fb6a969140c078549586c_prof);

        
        $__internal_b24d6eb6b19cd90eeea66280895da8bbd97dcf11ba8197643c6929d0b1175e93->leave($__internal_b24d6eb6b19cd90eeea66280895da8bbd97dcf11ba8197643c6929d0b1175e93_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_60520aa505a9157ab2e974022733536a0289226f1fd5b8327ecb5f730f82a370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60520aa505a9157ab2e974022733536a0289226f1fd5b8327ecb5f730f82a370->enter($__internal_60520aa505a9157ab2e974022733536a0289226f1fd5b8327ecb5f730f82a370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8310f72d5cd735c36321739c75e0579efab20dadb01b1fb4563eefef31ffcb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8310f72d5cd735c36321739c75e0579efab20dadb01b1fb4563eefef31ffcb27->enter($__internal_8310f72d5cd735c36321739c75e0579efab20dadb01b1fb4563eefef31ffcb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_8310f72d5cd735c36321739c75e0579efab20dadb01b1fb4563eefef31ffcb27->leave($__internal_8310f72d5cd735c36321739c75e0579efab20dadb01b1fb4563eefef31ffcb27_prof);

        
        $__internal_60520aa505a9157ab2e974022733536a0289226f1fd5b8327ecb5f730f82a370->leave($__internal_60520aa505a9157ab2e974022733536a0289226f1fd5b8327ecb5f730f82a370_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5d3a591491ca1bbad5a2cbe20dfea67d7f2956aff9b6e5858efff178e7ca1421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3a591491ca1bbad5a2cbe20dfea67d7f2956aff9b6e5858efff178e7ca1421->enter($__internal_5d3a591491ca1bbad5a2cbe20dfea67d7f2956aff9b6e5858efff178e7ca1421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0ae74ddfead6111970a3655ffb92e8573b6dbe4d181e1a22db3448d2b6aa9696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae74ddfead6111970a3655ffb92e8573b6dbe4d181e1a22db3448d2b6aa9696->enter($__internal_0ae74ddfead6111970a3655ffb92e8573b6dbe4d181e1a22db3448d2b6aa9696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_0ae74ddfead6111970a3655ffb92e8573b6dbe4d181e1a22db3448d2b6aa9696->leave($__internal_0ae74ddfead6111970a3655ffb92e8573b6dbe4d181e1a22db3448d2b6aa9696_prof);

        
        $__internal_5d3a591491ca1bbad5a2cbe20dfea67d7f2956aff9b6e5858efff178e7ca1421->leave($__internal_5d3a591491ca1bbad5a2cbe20dfea67d7f2956aff9b6e5858efff178e7ca1421_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_08e4f5eff40ca81e0eaa153e0086f6faddf79c9acf1415d3cdd095bf32dd96fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e4f5eff40ca81e0eaa153e0086f6faddf79c9acf1415d3cdd095bf32dd96fa->enter($__internal_08e4f5eff40ca81e0eaa153e0086f6faddf79c9acf1415d3cdd095bf32dd96fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5fa9c27a74619ac8b8879b64429ac3fdbf75d656b50ced5b4a0ff4d97efe4c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa9c27a74619ac8b8879b64429ac3fdbf75d656b50ced5b4a0ff4d97efe4c10->enter($__internal_5fa9c27a74619ac8b8879b64429ac3fdbf75d656b50ced5b4a0ff4d97efe4c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_5fa9c27a74619ac8b8879b64429ac3fdbf75d656b50ced5b4a0ff4d97efe4c10->leave($__internal_5fa9c27a74619ac8b8879b64429ac3fdbf75d656b50ced5b4a0ff4d97efe4c10_prof);

        
        $__internal_08e4f5eff40ca81e0eaa153e0086f6faddf79c9acf1415d3cdd095bf32dd96fa->leave($__internal_08e4f5eff40ca81e0eaa153e0086f6faddf79c9acf1415d3cdd095bf32dd96fa_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0b4a202776d38a2a9e3ace38b163732f7f5eb38aa61c2994e84286df6ebe21d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4a202776d38a2a9e3ace38b163732f7f5eb38aa61c2994e84286df6ebe21d1->enter($__internal_0b4a202776d38a2a9e3ace38b163732f7f5eb38aa61c2994e84286df6ebe21d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7d9e0c8f991c4c30fa7837f730dde95886b5d4ab7fea704df25b405054775bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9e0c8f991c4c30fa7837f730dde95886b5d4ab7fea704df25b405054775bb5->enter($__internal_7d9e0c8f991c4c30fa7837f730dde95886b5d4ab7fea704df25b405054775bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_7d9e0c8f991c4c30fa7837f730dde95886b5d4ab7fea704df25b405054775bb5->leave($__internal_7d9e0c8f991c4c30fa7837f730dde95886b5d4ab7fea704df25b405054775bb5_prof);

        
        $__internal_0b4a202776d38a2a9e3ace38b163732f7f5eb38aa61c2994e84286df6ebe21d1->leave($__internal_0b4a202776d38a2a9e3ace38b163732f7f5eb38aa61c2994e84286df6ebe21d1_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_74c98e3a41c8b3efd58f9f9c8f1eafafb6af4fd1b6f86c6ef9b76d79a2730209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c98e3a41c8b3efd58f9f9c8f1eafafb6af4fd1b6f86c6ef9b76d79a2730209->enter($__internal_74c98e3a41c8b3efd58f9f9c8f1eafafb6af4fd1b6f86c6ef9b76d79a2730209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_64a3331f799b40c867ee532e1f81df05ef664aa89c1c9b98c8d9c5dc9ab501cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a3331f799b40c867ee532e1f81df05ef664aa89c1c9b98c8d9c5dc9ab501cf->enter($__internal_64a3331f799b40c867ee532e1f81df05ef664aa89c1c9b98c8d9c5dc9ab501cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_64a3331f799b40c867ee532e1f81df05ef664aa89c1c9b98c8d9c5dc9ab501cf->leave($__internal_64a3331f799b40c867ee532e1f81df05ef664aa89c1c9b98c8d9c5dc9ab501cf_prof);

        
        $__internal_74c98e3a41c8b3efd58f9f9c8f1eafafb6af4fd1b6f86c6ef9b76d79a2730209->leave($__internal_74c98e3a41c8b3efd58f9f9c8f1eafafb6af4fd1b6f86c6ef9b76d79a2730209_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_663d057345fdedda04e080b9ffbbcd8710bbd588469c9136e6a9f3fe572ab1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663d057345fdedda04e080b9ffbbcd8710bbd588469c9136e6a9f3fe572ab1bd->enter($__internal_663d057345fdedda04e080b9ffbbcd8710bbd588469c9136e6a9f3fe572ab1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4820cf5e8c810fe6c6fc492e6b71b75c47c19faa978146bac0bb959e8fc837d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4820cf5e8c810fe6c6fc492e6b71b75c47c19faa978146bac0bb959e8fc837d8->enter($__internal_4820cf5e8c810fe6c6fc492e6b71b75c47c19faa978146bac0bb959e8fc837d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4820cf5e8c810fe6c6fc492e6b71b75c47c19faa978146bac0bb959e8fc837d8->leave($__internal_4820cf5e8c810fe6c6fc492e6b71b75c47c19faa978146bac0bb959e8fc837d8_prof);

        
        $__internal_663d057345fdedda04e080b9ffbbcd8710bbd588469c9136e6a9f3fe572ab1bd->leave($__internal_663d057345fdedda04e080b9ffbbcd8710bbd588469c9136e6a9f3fe572ab1bd_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_49a514e1ee8c70ac1891594a60794732d4784850c12c45209a5f06b39dc6711b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a514e1ee8c70ac1891594a60794732d4784850c12c45209a5f06b39dc6711b->enter($__internal_49a514e1ee8c70ac1891594a60794732d4784850c12c45209a5f06b39dc6711b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_fd84d20bf648106ef15587db47379f5c887f9db2622c9a44ed6a14b0f93770c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd84d20bf648106ef15587db47379f5c887f9db2622c9a44ed6a14b0f93770c8->enter($__internal_fd84d20bf648106ef15587db47379f5c887f9db2622c9a44ed6a14b0f93770c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fd84d20bf648106ef15587db47379f5c887f9db2622c9a44ed6a14b0f93770c8->leave($__internal_fd84d20bf648106ef15587db47379f5c887f9db2622c9a44ed6a14b0f93770c8_prof);

        
        $__internal_49a514e1ee8c70ac1891594a60794732d4784850c12c45209a5f06b39dc6711b->leave($__internal_49a514e1ee8c70ac1891594a60794732d4784850c12c45209a5f06b39dc6711b_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_99b277b4d5f50e5b7cb94199d2adbe4bee530dbaa42e782caa39b1611c95d8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b277b4d5f50e5b7cb94199d2adbe4bee530dbaa42e782caa39b1611c95d8b1->enter($__internal_99b277b4d5f50e5b7cb94199d2adbe4bee530dbaa42e782caa39b1611c95d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_21d21675d07bf60fc644054bc2933acc29da9a23c7916bfec2f1ea9956d8600a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d21675d07bf60fc644054bc2933acc29da9a23c7916bfec2f1ea9956d8600a->enter($__internal_21d21675d07bf60fc644054bc2933acc29da9a23c7916bfec2f1ea9956d8600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_21d21675d07bf60fc644054bc2933acc29da9a23c7916bfec2f1ea9956d8600a->leave($__internal_21d21675d07bf60fc644054bc2933acc29da9a23c7916bfec2f1ea9956d8600a_prof);

        
        $__internal_99b277b4d5f50e5b7cb94199d2adbe4bee530dbaa42e782caa39b1611c95d8b1->leave($__internal_99b277b4d5f50e5b7cb94199d2adbe4bee530dbaa42e782caa39b1611c95d8b1_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_52bb7ba64fa14672c19faabd3d15df20aef2de5bc03e3914d8c401bb2c0175cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bb7ba64fa14672c19faabd3d15df20aef2de5bc03e3914d8c401bb2c0175cf->enter($__internal_52bb7ba64fa14672c19faabd3d15df20aef2de5bc03e3914d8c401bb2c0175cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_eb38975ae215370eea25fb38bfe1ae1d97a79a617b26e96b30384bbf150bcd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb38975ae215370eea25fb38bfe1ae1d97a79a617b26e96b30384bbf150bcd3f->enter($__internal_eb38975ae215370eea25fb38bfe1ae1d97a79a617b26e96b30384bbf150bcd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_eb38975ae215370eea25fb38bfe1ae1d97a79a617b26e96b30384bbf150bcd3f->leave($__internal_eb38975ae215370eea25fb38bfe1ae1d97a79a617b26e96b30384bbf150bcd3f_prof);

        
        $__internal_52bb7ba64fa14672c19faabd3d15df20aef2de5bc03e3914d8c401bb2c0175cf->leave($__internal_52bb7ba64fa14672c19faabd3d15df20aef2de5bc03e3914d8c401bb2c0175cf_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e03061d9477f8b186d3480fcfbfdf6738834b34f63d91e2604fc670a15f51fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03061d9477f8b186d3480fcfbfdf6738834b34f63d91e2604fc670a15f51fc8->enter($__internal_e03061d9477f8b186d3480fcfbfdf6738834b34f63d91e2604fc670a15f51fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2e64295d224b11e55850bf871807ccf8d3a685a9c4b46a884ec96513e9440688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e64295d224b11e55850bf871807ccf8d3a685a9c4b46a884ec96513e9440688->enter($__internal_2e64295d224b11e55850bf871807ccf8d3a685a9c4b46a884ec96513e9440688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 213
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_2e64295d224b11e55850bf871807ccf8d3a685a9c4b46a884ec96513e9440688->leave($__internal_2e64295d224b11e55850bf871807ccf8d3a685a9c4b46a884ec96513e9440688_prof);

        
        $__internal_e03061d9477f8b186d3480fcfbfdf6738834b34f63d91e2604fc670a15f51fc8->leave($__internal_e03061d9477f8b186d3480fcfbfdf6738834b34f63d91e2604fc670a15f51fc8_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c8a99786232a183f258c20172b32ad964bce36c3c558549d961f6e8ba6bfb86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a99786232a183f258c20172b32ad964bce36c3c558549d961f6e8ba6bfb86d->enter($__internal_c8a99786232a183f258c20172b32ad964bce36c3c558549d961f6e8ba6bfb86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c09d3fc193def1b2e3bb521caec361b8f86e81e84c784114ed3e0d4621c440fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09d3fc193def1b2e3bb521caec361b8f86e81e84c784114ed3e0d4621c440fc->enter($__internal_c09d3fc193def1b2e3bb521caec361b8f86e81e84c784114ed3e0d4621c440fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_c09d3fc193def1b2e3bb521caec361b8f86e81e84c784114ed3e0d4621c440fc->leave($__internal_c09d3fc193def1b2e3bb521caec361b8f86e81e84c784114ed3e0d4621c440fc_prof);

        
        $__internal_c8a99786232a183f258c20172b32ad964bce36c3c558549d961f6e8ba6bfb86d->leave($__internal_c8a99786232a183f258c20172b32ad964bce36c3c558549d961f6e8ba6bfb86d_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3e02f6b128039c8e3cf0b63ede40f8ba37d562a03364fb7a73a93619ec083d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e02f6b128039c8e3cf0b63ede40f8ba37d562a03364fb7a73a93619ec083d6a->enter($__internal_3e02f6b128039c8e3cf0b63ede40f8ba37d562a03364fb7a73a93619ec083d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_aa236d758af9a7611a6e03295fcb0e253c024f4674436c9884e5f522da2f1707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa236d758af9a7611a6e03295fcb0e253c024f4674436c9884e5f522da2f1707->enter($__internal_aa236d758af9a7611a6e03295fcb0e253c024f4674436c9884e5f522da2f1707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_aa236d758af9a7611a6e03295fcb0e253c024f4674436c9884e5f522da2f1707->leave($__internal_aa236d758af9a7611a6e03295fcb0e253c024f4674436c9884e5f522da2f1707_prof);

        
        $__internal_3e02f6b128039c8e3cf0b63ede40f8ba37d562a03364fb7a73a93619ec083d6a->leave($__internal_3e02f6b128039c8e3cf0b63ede40f8ba37d562a03364fb7a73a93619ec083d6a_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b3996bc1230b2e44e4ec3611e88aa678c6cd822923e37354a83cf167494bc859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3996bc1230b2e44e4ec3611e88aa678c6cd822923e37354a83cf167494bc859->enter($__internal_b3996bc1230b2e44e4ec3611e88aa678c6cd822923e37354a83cf167494bc859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5f7c22780f9a1ce7e760988be5f5fa7e58208bd24e77d70650ca10cd9d696f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7c22780f9a1ce7e760988be5f5fa7e58208bd24e77d70650ca10cd9d696f64->enter($__internal_5f7c22780f9a1ce7e760988be5f5fa7e58208bd24e77d70650ca10cd9d696f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5f7c22780f9a1ce7e760988be5f5fa7e58208bd24e77d70650ca10cd9d696f64->leave($__internal_5f7c22780f9a1ce7e760988be5f5fa7e58208bd24e77d70650ca10cd9d696f64_prof);

        
        $__internal_b3996bc1230b2e44e4ec3611e88aa678c6cd822923e37354a83cf167494bc859->leave($__internal_b3996bc1230b2e44e4ec3611e88aa678c6cd822923e37354a83cf167494bc859_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f051d7c3a9180886c12d447282ae465f34aa7d5e3b226abb9a4efd4a155c54ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f051d7c3a9180886c12d447282ae465f34aa7d5e3b226abb9a4efd4a155c54ec->enter($__internal_f051d7c3a9180886c12d447282ae465f34aa7d5e3b226abb9a4efd4a155c54ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d2282a4fbc42c88cd82a336085a1a22ae5c3d380384e1bda4081ce328c97672f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2282a4fbc42c88cd82a336085a1a22ae5c3d380384e1bda4081ce328c97672f->enter($__internal_d2282a4fbc42c88cd82a336085a1a22ae5c3d380384e1bda4081ce328c97672f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d2282a4fbc42c88cd82a336085a1a22ae5c3d380384e1bda4081ce328c97672f->leave($__internal_d2282a4fbc42c88cd82a336085a1a22ae5c3d380384e1bda4081ce328c97672f_prof);

        
        $__internal_f051d7c3a9180886c12d447282ae465f34aa7d5e3b226abb9a4efd4a155c54ec->leave($__internal_f051d7c3a9180886c12d447282ae465f34aa7d5e3b226abb9a4efd4a155c54ec_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_29905a04071d1c36f9831c84259eb862a282bdd84b744884096874bf3a3797f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29905a04071d1c36f9831c84259eb862a282bdd84b744884096874bf3a3797f9->enter($__internal_29905a04071d1c36f9831c84259eb862a282bdd84b744884096874bf3a3797f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_15735e69802c89acad520f7e20ab54135a7db6cb5550abd2d39a6d317056ada4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15735e69802c89acad520f7e20ab54135a7db6cb5550abd2d39a6d317056ada4->enter($__internal_15735e69802c89acad520f7e20ab54135a7db6cb5550abd2d39a6d317056ada4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_15735e69802c89acad520f7e20ab54135a7db6cb5550abd2d39a6d317056ada4->leave($__internal_15735e69802c89acad520f7e20ab54135a7db6cb5550abd2d39a6d317056ada4_prof);

        
        $__internal_29905a04071d1c36f9831c84259eb862a282bdd84b744884096874bf3a3797f9->leave($__internal_29905a04071d1c36f9831c84259eb862a282bdd84b744884096874bf3a3797f9_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d139cab37a3b1994d8a9ab4e6ee42b23fa63121bb441d73023836eb03c8c954a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d139cab37a3b1994d8a9ab4e6ee42b23fa63121bb441d73023836eb03c8c954a->enter($__internal_d139cab37a3b1994d8a9ab4e6ee42b23fa63121bb441d73023836eb03c8c954a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1df81e28bd735052488bf2ff4167ee83215b06220741f0b80782f29c7d9fcda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df81e28bd735052488bf2ff4167ee83215b06220741f0b80782f29c7d9fcda1->enter($__internal_1df81e28bd735052488bf2ff4167ee83215b06220741f0b80782f29c7d9fcda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1df81e28bd735052488bf2ff4167ee83215b06220741f0b80782f29c7d9fcda1->leave($__internal_1df81e28bd735052488bf2ff4167ee83215b06220741f0b80782f29c7d9fcda1_prof);

        
        $__internal_d139cab37a3b1994d8a9ab4e6ee42b23fa63121bb441d73023836eb03c8c954a->leave($__internal_d139cab37a3b1994d8a9ab4e6ee42b23fa63121bb441d73023836eb03c8c954a_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a1c9c1fccccb4335b31b1d268d1ddf9aacca5032506978b65d4a9e7c83a2d74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c9c1fccccb4335b31b1d268d1ddf9aacca5032506978b65d4a9e7c83a2d74b->enter($__internal_a1c9c1fccccb4335b31b1d268d1ddf9aacca5032506978b65d4a9e7c83a2d74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a0eb6eb78678cb0e1fe9085da656ac9ee10a6c69975e193cbd4e633c576532e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0eb6eb78678cb0e1fe9085da656ac9ee10a6c69975e193cbd4e633c576532e8->enter($__internal_a0eb6eb78678cb0e1fe9085da656ac9ee10a6c69975e193cbd4e633c576532e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_a0eb6eb78678cb0e1fe9085da656ac9ee10a6c69975e193cbd4e633c576532e8->leave($__internal_a0eb6eb78678cb0e1fe9085da656ac9ee10a6c69975e193cbd4e633c576532e8_prof);

        
        $__internal_a1c9c1fccccb4335b31b1d268d1ddf9aacca5032506978b65d4a9e7c83a2d74b->leave($__internal_a1c9c1fccccb4335b31b1d268d1ddf9aacca5032506978b65d4a9e7c83a2d74b_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_166a87ea8b4235fb570aa7844a0229f0fb482f5bcb6a545fbb8c5ace175fca70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166a87ea8b4235fb570aa7844a0229f0fb482f5bcb6a545fbb8c5ace175fca70->enter($__internal_166a87ea8b4235fb570aa7844a0229f0fb482f5bcb6a545fbb8c5ace175fca70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_76fc6c22c896fc2452ca019ab5d168af81f484e382bb760e92b1ae9e3a42bdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fc6c22c896fc2452ca019ab5d168af81f484e382bb760e92b1ae9e3a42bdd3->enter($__internal_76fc6c22c896fc2452ca019ab5d168af81f484e382bb760e92b1ae9e3a42bdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_76fc6c22c896fc2452ca019ab5d168af81f484e382bb760e92b1ae9e3a42bdd3->leave($__internal_76fc6c22c896fc2452ca019ab5d168af81f484e382bb760e92b1ae9e3a42bdd3_prof);

        
        $__internal_166a87ea8b4235fb570aa7844a0229f0fb482f5bcb6a545fbb8c5ace175fca70->leave($__internal_166a87ea8b4235fb570aa7844a0229f0fb482f5bcb6a545fbb8c5ace175fca70_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b2104cd47bc5282055b72e5b1b489125711af2d7a053b53d2c8f88fd685dc6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2104cd47bc5282055b72e5b1b489125711af2d7a053b53d2c8f88fd685dc6c3->enter($__internal_b2104cd47bc5282055b72e5b1b489125711af2d7a053b53d2c8f88fd685dc6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ddb89ae65d7e57520d2b4b69f1864d27db18a6a814f65d8307d82e76f356a7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb89ae65d7e57520d2b4b69f1864d27db18a6a814f65d8307d82e76f356a7df->enter($__internal_ddb89ae65d7e57520d2b4b69f1864d27db18a6a814f65d8307d82e76f356a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ddb89ae65d7e57520d2b4b69f1864d27db18a6a814f65d8307d82e76f356a7df->leave($__internal_ddb89ae65d7e57520d2b4b69f1864d27db18a6a814f65d8307d82e76f356a7df_prof);

        
        $__internal_b2104cd47bc5282055b72e5b1b489125711af2d7a053b53d2c8f88fd685dc6c3->leave($__internal_b2104cd47bc5282055b72e5b1b489125711af2d7a053b53d2c8f88fd685dc6c3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
