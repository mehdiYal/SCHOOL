<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_89f13d610b52d4fdf0099693104e24b1d30a4ba44aa44e612818e33412276554 extends Twig_Template
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
        $__internal_80658b81408cba91b99e5dbc7818132388d7bdcca402ae4c07ef4b3f4a579158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80658b81408cba91b99e5dbc7818132388d7bdcca402ae4c07ef4b3f4a579158->enter($__internal_80658b81408cba91b99e5dbc7818132388d7bdcca402ae4c07ef4b3f4a579158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_dca282ea4b8d2786d9ed71b93be84d6b2e47d6b0eaf5d72a5af5955141818378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca282ea4b8d2786d9ed71b93be84d6b2e47d6b0eaf5d72a5af5955141818378->enter($__internal_dca282ea4b8d2786d9ed71b93be84d6b2e47d6b0eaf5d72a5af5955141818378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_80658b81408cba91b99e5dbc7818132388d7bdcca402ae4c07ef4b3f4a579158->leave($__internal_80658b81408cba91b99e5dbc7818132388d7bdcca402ae4c07ef4b3f4a579158_prof);

        
        $__internal_dca282ea4b8d2786d9ed71b93be84d6b2e47d6b0eaf5d72a5af5955141818378->leave($__internal_dca282ea4b8d2786d9ed71b93be84d6b2e47d6b0eaf5d72a5af5955141818378_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f893318e9586e0e1eadbb2a3b13faa862199556619921261d049a9e751c41eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f893318e9586e0e1eadbb2a3b13faa862199556619921261d049a9e751c41eb6->enter($__internal_f893318e9586e0e1eadbb2a3b13faa862199556619921261d049a9e751c41eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_dd6a6eed1168467441ce330e93699aa60a25f576ee16486ebee140268f9bf34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6a6eed1168467441ce330e93699aa60a25f576ee16486ebee140268f9bf34a->enter($__internal_dd6a6eed1168467441ce330e93699aa60a25f576ee16486ebee140268f9bf34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dd6a6eed1168467441ce330e93699aa60a25f576ee16486ebee140268f9bf34a->leave($__internal_dd6a6eed1168467441ce330e93699aa60a25f576ee16486ebee140268f9bf34a_prof);

        
        $__internal_f893318e9586e0e1eadbb2a3b13faa862199556619921261d049a9e751c41eb6->leave($__internal_f893318e9586e0e1eadbb2a3b13faa862199556619921261d049a9e751c41eb6_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e30b89cc2c39f5783a9479fc39a942c599f9a924d4e0ab8583737b8688b90001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30b89cc2c39f5783a9479fc39a942c599f9a924d4e0ab8583737b8688b90001->enter($__internal_e30b89cc2c39f5783a9479fc39a942c599f9a924d4e0ab8583737b8688b90001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_172dacc0ed0734a271574caa482f3ff2d1c2c082cb6b9971fd483aaa0ebde337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172dacc0ed0734a271574caa482f3ff2d1c2c082cb6b9971fd483aaa0ebde337->enter($__internal_172dacc0ed0734a271574caa482f3ff2d1c2c082cb6b9971fd483aaa0ebde337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_172dacc0ed0734a271574caa482f3ff2d1c2c082cb6b9971fd483aaa0ebde337->leave($__internal_172dacc0ed0734a271574caa482f3ff2d1c2c082cb6b9971fd483aaa0ebde337_prof);

        
        $__internal_e30b89cc2c39f5783a9479fc39a942c599f9a924d4e0ab8583737b8688b90001->leave($__internal_e30b89cc2c39f5783a9479fc39a942c599f9a924d4e0ab8583737b8688b90001_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b768baf63e43c8fe28a7018419cbda10f8830c38234d88a662e89b7f78ab2762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b768baf63e43c8fe28a7018419cbda10f8830c38234d88a662e89b7f78ab2762->enter($__internal_b768baf63e43c8fe28a7018419cbda10f8830c38234d88a662e89b7f78ab2762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_bbb68ba03418a8326c45f4c0bc21b454d8afff54c8edb9031d4638b12428779f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb68ba03418a8326c45f4c0bc21b454d8afff54c8edb9031d4638b12428779f->enter($__internal_bbb68ba03418a8326c45f4c0bc21b454d8afff54c8edb9031d4638b12428779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_bbb68ba03418a8326c45f4c0bc21b454d8afff54c8edb9031d4638b12428779f->leave($__internal_bbb68ba03418a8326c45f4c0bc21b454d8afff54c8edb9031d4638b12428779f_prof);

        
        $__internal_b768baf63e43c8fe28a7018419cbda10f8830c38234d88a662e89b7f78ab2762->leave($__internal_b768baf63e43c8fe28a7018419cbda10f8830c38234d88a662e89b7f78ab2762_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f4063ed30e50261010a9995349b0992f7d070f21d92a9800b7a7a0e3a78f6e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4063ed30e50261010a9995349b0992f7d070f21d92a9800b7a7a0e3a78f6e1f->enter($__internal_f4063ed30e50261010a9995349b0992f7d070f21d92a9800b7a7a0e3a78f6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7f189a13b9e27b24ca483d55707841ab1a37cf4d597a7555cad7f8638a079f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f189a13b9e27b24ca483d55707841ab1a37cf4d597a7555cad7f8638a079f9c->enter($__internal_7f189a13b9e27b24ca483d55707841ab1a37cf4d597a7555cad7f8638a079f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_d14e8f1844f07d82a34a8fb23e030e117406e90ce5a6ec1022f46161b7e5f77d = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_a6e14264d02f866c3f6c53aece541cf1a88891822089d32ec1802a130343cc2c = "{{") && ('' === $__internal_a6e14264d02f866c3f6c53aece541cf1a88891822089d32ec1802a130343cc2c || 0 === strpos($__internal_d14e8f1844f07d82a34a8fb23e030e117406e90ce5a6ec1022f46161b7e5f77d, $__internal_a6e14264d02f866c3f6c53aece541cf1a88891822089d32ec1802a130343cc2c)));
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
        
        $__internal_7f189a13b9e27b24ca483d55707841ab1a37cf4d597a7555cad7f8638a079f9c->leave($__internal_7f189a13b9e27b24ca483d55707841ab1a37cf4d597a7555cad7f8638a079f9c_prof);

        
        $__internal_f4063ed30e50261010a9995349b0992f7d070f21d92a9800b7a7a0e3a78f6e1f->leave($__internal_f4063ed30e50261010a9995349b0992f7d070f21d92a9800b7a7a0e3a78f6e1f_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_24abc6b600f06ea82fc050920a0ee72490becc595354a013e104da193ab55f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24abc6b600f06ea82fc050920a0ee72490becc595354a013e104da193ab55f81->enter($__internal_24abc6b600f06ea82fc050920a0ee72490becc595354a013e104da193ab55f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b4469ba88d81a3800453e497ea725598abb67dc48fb0324490e2ae64e83edccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4469ba88d81a3800453e497ea725598abb67dc48fb0324490e2ae64e83edccb->enter($__internal_b4469ba88d81a3800453e497ea725598abb67dc48fb0324490e2ae64e83edccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b4469ba88d81a3800453e497ea725598abb67dc48fb0324490e2ae64e83edccb->leave($__internal_b4469ba88d81a3800453e497ea725598abb67dc48fb0324490e2ae64e83edccb_prof);

        
        $__internal_24abc6b600f06ea82fc050920a0ee72490becc595354a013e104da193ab55f81->leave($__internal_24abc6b600f06ea82fc050920a0ee72490becc595354a013e104da193ab55f81_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0c71fbe12e511cf22c3314f1b984298d81309a3e5794f0ef069bc384768bef9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c71fbe12e511cf22c3314f1b984298d81309a3e5794f0ef069bc384768bef9c->enter($__internal_0c71fbe12e511cf22c3314f1b984298d81309a3e5794f0ef069bc384768bef9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bb066870cd0320dd2cc1bc0eb8c51411f057564993d87faf8f4b322a79ec42cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb066870cd0320dd2cc1bc0eb8c51411f057564993d87faf8f4b322a79ec42cf->enter($__internal_bb066870cd0320dd2cc1bc0eb8c51411f057564993d87faf8f4b322a79ec42cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_bb066870cd0320dd2cc1bc0eb8c51411f057564993d87faf8f4b322a79ec42cf->leave($__internal_bb066870cd0320dd2cc1bc0eb8c51411f057564993d87faf8f4b322a79ec42cf_prof);

        
        $__internal_0c71fbe12e511cf22c3314f1b984298d81309a3e5794f0ef069bc384768bef9c->leave($__internal_0c71fbe12e511cf22c3314f1b984298d81309a3e5794f0ef069bc384768bef9c_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c989ba15e8a41958a7c9eef3e7369743f07e7b41007cb1bb412c4be6dd9d5507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c989ba15e8a41958a7c9eef3e7369743f07e7b41007cb1bb412c4be6dd9d5507->enter($__internal_c989ba15e8a41958a7c9eef3e7369743f07e7b41007cb1bb412c4be6dd9d5507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2b087eb9a6d0104be34943f2f2031ed0db3b8b86f07f0fdf23af7b03fbcde56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b087eb9a6d0104be34943f2f2031ed0db3b8b86f07f0fdf23af7b03fbcde56c->enter($__internal_2b087eb9a6d0104be34943f2f2031ed0db3b8b86f07f0fdf23af7b03fbcde56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_2b087eb9a6d0104be34943f2f2031ed0db3b8b86f07f0fdf23af7b03fbcde56c->leave($__internal_2b087eb9a6d0104be34943f2f2031ed0db3b8b86f07f0fdf23af7b03fbcde56c_prof);

        
        $__internal_c989ba15e8a41958a7c9eef3e7369743f07e7b41007cb1bb412c4be6dd9d5507->leave($__internal_c989ba15e8a41958a7c9eef3e7369743f07e7b41007cb1bb412c4be6dd9d5507_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6898e7fafc5671eb1aa658c66037102a240290e0f80b1326cd14f71a59fc8fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6898e7fafc5671eb1aa658c66037102a240290e0f80b1326cd14f71a59fc8fb2->enter($__internal_6898e7fafc5671eb1aa658c66037102a240290e0f80b1326cd14f71a59fc8fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_06cef9bce3435527e3708bc6be45d657e6a5c5c63db80cc88027fb76de128ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cef9bce3435527e3708bc6be45d657e6a5c5c63db80cc88027fb76de128ca6->enter($__internal_06cef9bce3435527e3708bc6be45d657e6a5c5c63db80cc88027fb76de128ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_06cef9bce3435527e3708bc6be45d657e6a5c5c63db80cc88027fb76de128ca6->leave($__internal_06cef9bce3435527e3708bc6be45d657e6a5c5c63db80cc88027fb76de128ca6_prof);

        
        $__internal_6898e7fafc5671eb1aa658c66037102a240290e0f80b1326cd14f71a59fc8fb2->leave($__internal_6898e7fafc5671eb1aa658c66037102a240290e0f80b1326cd14f71a59fc8fb2_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_dea25a1271ff9d4af8ddb8bdfa975bbf48dc4ce0c7637ec6b5930178dcab81ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea25a1271ff9d4af8ddb8bdfa975bbf48dc4ce0c7637ec6b5930178dcab81ab->enter($__internal_dea25a1271ff9d4af8ddb8bdfa975bbf48dc4ce0c7637ec6b5930178dcab81ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8f22230c5cc0e4d01b3bc3f435f24d7ebf85fc0567f5612dd8ff01ad7e46aadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f22230c5cc0e4d01b3bc3f435f24d7ebf85fc0567f5612dd8ff01ad7e46aadd->enter($__internal_8f22230c5cc0e4d01b3bc3f435f24d7ebf85fc0567f5612dd8ff01ad7e46aadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_8f22230c5cc0e4d01b3bc3f435f24d7ebf85fc0567f5612dd8ff01ad7e46aadd->leave($__internal_8f22230c5cc0e4d01b3bc3f435f24d7ebf85fc0567f5612dd8ff01ad7e46aadd_prof);

        
        $__internal_dea25a1271ff9d4af8ddb8bdfa975bbf48dc4ce0c7637ec6b5930178dcab81ab->leave($__internal_dea25a1271ff9d4af8ddb8bdfa975bbf48dc4ce0c7637ec6b5930178dcab81ab_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_69cb4f2a3b4db9f3e7d3c69b6ab1cf28de3e0105165dc5542436c758ddc63035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cb4f2a3b4db9f3e7d3c69b6ab1cf28de3e0105165dc5542436c758ddc63035->enter($__internal_69cb4f2a3b4db9f3e7d3c69b6ab1cf28de3e0105165dc5542436c758ddc63035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a2f7de2663dabe6bb39d067f73b9829774dc3d0bb99bc6e3b72c3f2ab0c38b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f7de2663dabe6bb39d067f73b9829774dc3d0bb99bc6e3b72c3f2ab0c38b95->enter($__internal_a2f7de2663dabe6bb39d067f73b9829774dc3d0bb99bc6e3b72c3f2ab0c38b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a2f7de2663dabe6bb39d067f73b9829774dc3d0bb99bc6e3b72c3f2ab0c38b95->leave($__internal_a2f7de2663dabe6bb39d067f73b9829774dc3d0bb99bc6e3b72c3f2ab0c38b95_prof);

        
        $__internal_69cb4f2a3b4db9f3e7d3c69b6ab1cf28de3e0105165dc5542436c758ddc63035->leave($__internal_69cb4f2a3b4db9f3e7d3c69b6ab1cf28de3e0105165dc5542436c758ddc63035_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fd1908e779c5f50a3725abc06dd100763aa5a47aad2095e52efb60c7c535bc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1908e779c5f50a3725abc06dd100763aa5a47aad2095e52efb60c7c535bc6f->enter($__internal_fd1908e779c5f50a3725abc06dd100763aa5a47aad2095e52efb60c7c535bc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3f9ef71f6a3e83a47fcfb77693074328936d1d9fd88c4bc4d4dcd03f664be3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9ef71f6a3e83a47fcfb77693074328936d1d9fd88c4bc4d4dcd03f664be3fa->enter($__internal_3f9ef71f6a3e83a47fcfb77693074328936d1d9fd88c4bc4d4dcd03f664be3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_3f9ef71f6a3e83a47fcfb77693074328936d1d9fd88c4bc4d4dcd03f664be3fa->leave($__internal_3f9ef71f6a3e83a47fcfb77693074328936d1d9fd88c4bc4d4dcd03f664be3fa_prof);

        
        $__internal_fd1908e779c5f50a3725abc06dd100763aa5a47aad2095e52efb60c7c535bc6f->leave($__internal_fd1908e779c5f50a3725abc06dd100763aa5a47aad2095e52efb60c7c535bc6f_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ab04ead2170a920ae2d311b63882dfb22a59e9715632035259c7fa02a1558dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab04ead2170a920ae2d311b63882dfb22a59e9715632035259c7fa02a1558dac->enter($__internal_ab04ead2170a920ae2d311b63882dfb22a59e9715632035259c7fa02a1558dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_055cc492dd90143ec1199312abb7208c1a3e3a5f721c0cf208fd88b3a7ffdc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055cc492dd90143ec1199312abb7208c1a3e3a5f721c0cf208fd88b3a7ffdc33->enter($__internal_055cc492dd90143ec1199312abb7208c1a3e3a5f721c0cf208fd88b3a7ffdc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_055cc492dd90143ec1199312abb7208c1a3e3a5f721c0cf208fd88b3a7ffdc33->leave($__internal_055cc492dd90143ec1199312abb7208c1a3e3a5f721c0cf208fd88b3a7ffdc33_prof);

        
        $__internal_ab04ead2170a920ae2d311b63882dfb22a59e9715632035259c7fa02a1558dac->leave($__internal_ab04ead2170a920ae2d311b63882dfb22a59e9715632035259c7fa02a1558dac_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0952d33ffc4fe3dd0fb41d039da8b97cfeb5f22dd4db0c355e45d5a8629c5500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0952d33ffc4fe3dd0fb41d039da8b97cfeb5f22dd4db0c355e45d5a8629c5500->enter($__internal_0952d33ffc4fe3dd0fb41d039da8b97cfeb5f22dd4db0c355e45d5a8629c5500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_edc50009c403d2bae409a630b20d6a96d7ef5ff52891bde139f1e8c8da3d06f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc50009c403d2bae409a630b20d6a96d7ef5ff52891bde139f1e8c8da3d06f0->enter($__internal_edc50009c403d2bae409a630b20d6a96d7ef5ff52891bde139f1e8c8da3d06f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_edc50009c403d2bae409a630b20d6a96d7ef5ff52891bde139f1e8c8da3d06f0->leave($__internal_edc50009c403d2bae409a630b20d6a96d7ef5ff52891bde139f1e8c8da3d06f0_prof);

        
        $__internal_0952d33ffc4fe3dd0fb41d039da8b97cfeb5f22dd4db0c355e45d5a8629c5500->leave($__internal_0952d33ffc4fe3dd0fb41d039da8b97cfeb5f22dd4db0c355e45d5a8629c5500_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d72fb923fbffb06a545b8ec40374d7517f351bb9deddaa7837600a5df35d32e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72fb923fbffb06a545b8ec40374d7517f351bb9deddaa7837600a5df35d32e0->enter($__internal_d72fb923fbffb06a545b8ec40374d7517f351bb9deddaa7837600a5df35d32e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fd2e91b54206da397e380d72ff8db1397fca133319c04719903defb8cb337035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2e91b54206da397e380d72ff8db1397fca133319c04719903defb8cb337035->enter($__internal_fd2e91b54206da397e380d72ff8db1397fca133319c04719903defb8cb337035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_fd2e91b54206da397e380d72ff8db1397fca133319c04719903defb8cb337035->leave($__internal_fd2e91b54206da397e380d72ff8db1397fca133319c04719903defb8cb337035_prof);

        
        $__internal_d72fb923fbffb06a545b8ec40374d7517f351bb9deddaa7837600a5df35d32e0->leave($__internal_d72fb923fbffb06a545b8ec40374d7517f351bb9deddaa7837600a5df35d32e0_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_06cfca4aaa160b63ad010be00a401cd948dd1a731f7c81a3cf84ad3b307b2bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cfca4aaa160b63ad010be00a401cd948dd1a731f7c81a3cf84ad3b307b2bfc->enter($__internal_06cfca4aaa160b63ad010be00a401cd948dd1a731f7c81a3cf84ad3b307b2bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e00283f825e2430021384fe31dfff2d70991ee82aef4246d5b89068ec67d1048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00283f825e2430021384fe31dfff2d70991ee82aef4246d5b89068ec67d1048->enter($__internal_e00283f825e2430021384fe31dfff2d70991ee82aef4246d5b89068ec67d1048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e00283f825e2430021384fe31dfff2d70991ee82aef4246d5b89068ec67d1048->leave($__internal_e00283f825e2430021384fe31dfff2d70991ee82aef4246d5b89068ec67d1048_prof);

        
        $__internal_06cfca4aaa160b63ad010be00a401cd948dd1a731f7c81a3cf84ad3b307b2bfc->leave($__internal_06cfca4aaa160b63ad010be00a401cd948dd1a731f7c81a3cf84ad3b307b2bfc_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_11c7ac285734af46a93efa340d030b9d9e51098af008864ae0edcfb08aa635d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c7ac285734af46a93efa340d030b9d9e51098af008864ae0edcfb08aa635d7->enter($__internal_11c7ac285734af46a93efa340d030b9d9e51098af008864ae0edcfb08aa635d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d31dc079de88539d3a4d2ccc5d97de737571aa0a490bb418a65b9077f19692c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31dc079de88539d3a4d2ccc5d97de737571aa0a490bb418a65b9077f19692c2->enter($__internal_d31dc079de88539d3a4d2ccc5d97de737571aa0a490bb418a65b9077f19692c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d31dc079de88539d3a4d2ccc5d97de737571aa0a490bb418a65b9077f19692c2->leave($__internal_d31dc079de88539d3a4d2ccc5d97de737571aa0a490bb418a65b9077f19692c2_prof);

        
        $__internal_11c7ac285734af46a93efa340d030b9d9e51098af008864ae0edcfb08aa635d7->leave($__internal_11c7ac285734af46a93efa340d030b9d9e51098af008864ae0edcfb08aa635d7_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b69e1a99ac0bf57c08b712c07053877ac0f069fd8f44d2defce2fc2f27a3fa2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69e1a99ac0bf57c08b712c07053877ac0f069fd8f44d2defce2fc2f27a3fa2b->enter($__internal_b69e1a99ac0bf57c08b712c07053877ac0f069fd8f44d2defce2fc2f27a3fa2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_9b1cc6f72fbfb59a56993bd77fc98ea2a19a8a003d5405adcbc70694eb303289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1cc6f72fbfb59a56993bd77fc98ea2a19a8a003d5405adcbc70694eb303289->enter($__internal_9b1cc6f72fbfb59a56993bd77fc98ea2a19a8a003d5405adcbc70694eb303289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9b1cc6f72fbfb59a56993bd77fc98ea2a19a8a003d5405adcbc70694eb303289->leave($__internal_9b1cc6f72fbfb59a56993bd77fc98ea2a19a8a003d5405adcbc70694eb303289_prof);

        
        $__internal_b69e1a99ac0bf57c08b712c07053877ac0f069fd8f44d2defce2fc2f27a3fa2b->leave($__internal_b69e1a99ac0bf57c08b712c07053877ac0f069fd8f44d2defce2fc2f27a3fa2b_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_14ada4927ab9b5b5e2f038da08280dcafc071f88f8f7ac47d83742c9369c9f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ada4927ab9b5b5e2f038da08280dcafc071f88f8f7ac47d83742c9369c9f0a->enter($__internal_14ada4927ab9b5b5e2f038da08280dcafc071f88f8f7ac47d83742c9369c9f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ff5d127b8f0f0d15a6517cdb167348e05d5505438ab445b282a2d8f0ab07d7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5d127b8f0f0d15a6517cdb167348e05d5505438ab445b282a2d8f0ab07d7b6->enter($__internal_ff5d127b8f0f0d15a6517cdb167348e05d5505438ab445b282a2d8f0ab07d7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_ff5d127b8f0f0d15a6517cdb167348e05d5505438ab445b282a2d8f0ab07d7b6->leave($__internal_ff5d127b8f0f0d15a6517cdb167348e05d5505438ab445b282a2d8f0ab07d7b6_prof);

        
        $__internal_14ada4927ab9b5b5e2f038da08280dcafc071f88f8f7ac47d83742c9369c9f0a->leave($__internal_14ada4927ab9b5b5e2f038da08280dcafc071f88f8f7ac47d83742c9369c9f0a_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_95d47dd05b7f8aa87fc3fa0eecf5dc1f45e3c93f47053ec9a360182aa1d4da01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d47dd05b7f8aa87fc3fa0eecf5dc1f45e3c93f47053ec9a360182aa1d4da01->enter($__internal_95d47dd05b7f8aa87fc3fa0eecf5dc1f45e3c93f47053ec9a360182aa1d4da01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_09f2f2db859b085b4d7f5474a4128e2c8248e9750c99e9aa1cee96977784baf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f2f2db859b085b4d7f5474a4128e2c8248e9750c99e9aa1cee96977784baf8->enter($__internal_09f2f2db859b085b4d7f5474a4128e2c8248e9750c99e9aa1cee96977784baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_09f2f2db859b085b4d7f5474a4128e2c8248e9750c99e9aa1cee96977784baf8->leave($__internal_09f2f2db859b085b4d7f5474a4128e2c8248e9750c99e9aa1cee96977784baf8_prof);

        
        $__internal_95d47dd05b7f8aa87fc3fa0eecf5dc1f45e3c93f47053ec9a360182aa1d4da01->leave($__internal_95d47dd05b7f8aa87fc3fa0eecf5dc1f45e3c93f47053ec9a360182aa1d4da01_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c48489a7e791abdc0546332bddcdb2609926ac7bb8afd2078bef2b9798cc8913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48489a7e791abdc0546332bddcdb2609926ac7bb8afd2078bef2b9798cc8913->enter($__internal_c48489a7e791abdc0546332bddcdb2609926ac7bb8afd2078bef2b9798cc8913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_228379765cfc23fd521ff181c11fd2083152f7962a0b830b0ae615346937b295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228379765cfc23fd521ff181c11fd2083152f7962a0b830b0ae615346937b295->enter($__internal_228379765cfc23fd521ff181c11fd2083152f7962a0b830b0ae615346937b295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_228379765cfc23fd521ff181c11fd2083152f7962a0b830b0ae615346937b295->leave($__internal_228379765cfc23fd521ff181c11fd2083152f7962a0b830b0ae615346937b295_prof);

        
        $__internal_c48489a7e791abdc0546332bddcdb2609926ac7bb8afd2078bef2b9798cc8913->leave($__internal_c48489a7e791abdc0546332bddcdb2609926ac7bb8afd2078bef2b9798cc8913_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9ccffef9b53705a3c53810238249db369636a4b3027bad959f005003b06a0527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccffef9b53705a3c53810238249db369636a4b3027bad959f005003b06a0527->enter($__internal_9ccffef9b53705a3c53810238249db369636a4b3027bad959f005003b06a0527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_850576c31f5f471118875b9ddd5efea09b62a6d49539bc92eb73f1acbe54094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850576c31f5f471118875b9ddd5efea09b62a6d49539bc92eb73f1acbe54094d->enter($__internal_850576c31f5f471118875b9ddd5efea09b62a6d49539bc92eb73f1acbe54094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_850576c31f5f471118875b9ddd5efea09b62a6d49539bc92eb73f1acbe54094d->leave($__internal_850576c31f5f471118875b9ddd5efea09b62a6d49539bc92eb73f1acbe54094d_prof);

        
        $__internal_9ccffef9b53705a3c53810238249db369636a4b3027bad959f005003b06a0527->leave($__internal_9ccffef9b53705a3c53810238249db369636a4b3027bad959f005003b06a0527_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5c113227713f32ad3cddf57811b740094971de9c6d965e264ba3f0327e45a436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c113227713f32ad3cddf57811b740094971de9c6d965e264ba3f0327e45a436->enter($__internal_5c113227713f32ad3cddf57811b740094971de9c6d965e264ba3f0327e45a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c5f7cbcbd16c035c7e66e10df705d5a1a891815640c3af5569bdeecddddb852e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f7cbcbd16c035c7e66e10df705d5a1a891815640c3af5569bdeecddddb852e->enter($__internal_c5f7cbcbd16c035c7e66e10df705d5a1a891815640c3af5569bdeecddddb852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c5f7cbcbd16c035c7e66e10df705d5a1a891815640c3af5569bdeecddddb852e->leave($__internal_c5f7cbcbd16c035c7e66e10df705d5a1a891815640c3af5569bdeecddddb852e_prof);

        
        $__internal_5c113227713f32ad3cddf57811b740094971de9c6d965e264ba3f0327e45a436->leave($__internal_5c113227713f32ad3cddf57811b740094971de9c6d965e264ba3f0327e45a436_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b562be23e5a74f9772bba3c86dd51e15fe7684b89eeba90ad69ab7112e9b0e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b562be23e5a74f9772bba3c86dd51e15fe7684b89eeba90ad69ab7112e9b0e6d->enter($__internal_b562be23e5a74f9772bba3c86dd51e15fe7684b89eeba90ad69ab7112e9b0e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_16435c9d5fa41b45c538216ccf3ffddf21df7d7343f8c17c5d8d1c3b9a42d0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16435c9d5fa41b45c538216ccf3ffddf21df7d7343f8c17c5d8d1c3b9a42d0ed->enter($__internal_16435c9d5fa41b45c538216ccf3ffddf21df7d7343f8c17c5d8d1c3b9a42d0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_16435c9d5fa41b45c538216ccf3ffddf21df7d7343f8c17c5d8d1c3b9a42d0ed->leave($__internal_16435c9d5fa41b45c538216ccf3ffddf21df7d7343f8c17c5d8d1c3b9a42d0ed_prof);

        
        $__internal_b562be23e5a74f9772bba3c86dd51e15fe7684b89eeba90ad69ab7112e9b0e6d->leave($__internal_b562be23e5a74f9772bba3c86dd51e15fe7684b89eeba90ad69ab7112e9b0e6d_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_34b0f03e6bcc3fbdd3713d1dbd24d59fa0b3029c4182840186259966557146a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b0f03e6bcc3fbdd3713d1dbd24d59fa0b3029c4182840186259966557146a2->enter($__internal_34b0f03e6bcc3fbdd3713d1dbd24d59fa0b3029c4182840186259966557146a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ee86537f2a507b5e12688bb91ae60a2c9d67fb4003e9ea6ed64468174b066708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee86537f2a507b5e12688bb91ae60a2c9d67fb4003e9ea6ed64468174b066708->enter($__internal_ee86537f2a507b5e12688bb91ae60a2c9d67fb4003e9ea6ed64468174b066708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ee86537f2a507b5e12688bb91ae60a2c9d67fb4003e9ea6ed64468174b066708->leave($__internal_ee86537f2a507b5e12688bb91ae60a2c9d67fb4003e9ea6ed64468174b066708_prof);

        
        $__internal_34b0f03e6bcc3fbdd3713d1dbd24d59fa0b3029c4182840186259966557146a2->leave($__internal_34b0f03e6bcc3fbdd3713d1dbd24d59fa0b3029c4182840186259966557146a2_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d1c232e231bdc1228458ab2988afcf777ca9e67ff588184a29e5859aa40003bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c232e231bdc1228458ab2988afcf777ca9e67ff588184a29e5859aa40003bc->enter($__internal_d1c232e231bdc1228458ab2988afcf777ca9e67ff588184a29e5859aa40003bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_86528b8e3dabf1373b3dbc1b701d302d57f7edda45ba95504910a3dc869f5703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86528b8e3dabf1373b3dbc1b701d302d57f7edda45ba95504910a3dc869f5703->enter($__internal_86528b8e3dabf1373b3dbc1b701d302d57f7edda45ba95504910a3dc869f5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_86528b8e3dabf1373b3dbc1b701d302d57f7edda45ba95504910a3dc869f5703->leave($__internal_86528b8e3dabf1373b3dbc1b701d302d57f7edda45ba95504910a3dc869f5703_prof);

        
        $__internal_d1c232e231bdc1228458ab2988afcf777ca9e67ff588184a29e5859aa40003bc->leave($__internal_d1c232e231bdc1228458ab2988afcf777ca9e67ff588184a29e5859aa40003bc_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_79bc27ac43e1b53c5f643cc3396b6b954c6bd6747bb2e70a9e0448276a9d9b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bc27ac43e1b53c5f643cc3396b6b954c6bd6747bb2e70a9e0448276a9d9b6b->enter($__internal_79bc27ac43e1b53c5f643cc3396b6b954c6bd6747bb2e70a9e0448276a9d9b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7197cc5c8c97d9ce5dd75d3212df41a7f6a3e305781cd4793e5ef8af86a9a731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7197cc5c8c97d9ce5dd75d3212df41a7f6a3e305781cd4793e5ef8af86a9a731->enter($__internal_7197cc5c8c97d9ce5dd75d3212df41a7f6a3e305781cd4793e5ef8af86a9a731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_7197cc5c8c97d9ce5dd75d3212df41a7f6a3e305781cd4793e5ef8af86a9a731->leave($__internal_7197cc5c8c97d9ce5dd75d3212df41a7f6a3e305781cd4793e5ef8af86a9a731_prof);

        
        $__internal_79bc27ac43e1b53c5f643cc3396b6b954c6bd6747bb2e70a9e0448276a9d9b6b->leave($__internal_79bc27ac43e1b53c5f643cc3396b6b954c6bd6747bb2e70a9e0448276a9d9b6b_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3ac024804109a72d7ffb6a2d8669d5c3e80d88c96764f71646d1d271a3c139f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac024804109a72d7ffb6a2d8669d5c3e80d88c96764f71646d1d271a3c139f3->enter($__internal_3ac024804109a72d7ffb6a2d8669d5c3e80d88c96764f71646d1d271a3c139f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_632c05677368923769b91a9e6715d1b14e0161f0b34cbfbf9f584f4be8367e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632c05677368923769b91a9e6715d1b14e0161f0b34cbfbf9f584f4be8367e69->enter($__internal_632c05677368923769b91a9e6715d1b14e0161f0b34cbfbf9f584f4be8367e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_632c05677368923769b91a9e6715d1b14e0161f0b34cbfbf9f584f4be8367e69->leave($__internal_632c05677368923769b91a9e6715d1b14e0161f0b34cbfbf9f584f4be8367e69_prof);

        
        $__internal_3ac024804109a72d7ffb6a2d8669d5c3e80d88c96764f71646d1d271a3c139f3->leave($__internal_3ac024804109a72d7ffb6a2d8669d5c3e80d88c96764f71646d1d271a3c139f3_prof);

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
