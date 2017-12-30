<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_fd0b835deaa740df30dbdc3e2fbbf24e0cd0bfe7086c8c0bc144a4c2c06acca0 extends Twig_Template
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
        $__internal_e3e082f219b8a1e87d6440d085947b23cede4320fa7972f73e6e0f725ff87761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e082f219b8a1e87d6440d085947b23cede4320fa7972f73e6e0f725ff87761->enter($__internal_e3e082f219b8a1e87d6440d085947b23cede4320fa7972f73e6e0f725ff87761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_bbc05bc3198d6fc8aea13f5eebc9c8eb8309e5eb13efb9d6acdde789f247b2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc05bc3198d6fc8aea13f5eebc9c8eb8309e5eb13efb9d6acdde789f247b2d6->enter($__internal_bbc05bc3198d6fc8aea13f5eebc9c8eb8309e5eb13efb9d6acdde789f247b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_e3e082f219b8a1e87d6440d085947b23cede4320fa7972f73e6e0f725ff87761->leave($__internal_e3e082f219b8a1e87d6440d085947b23cede4320fa7972f73e6e0f725ff87761_prof);

        
        $__internal_bbc05bc3198d6fc8aea13f5eebc9c8eb8309e5eb13efb9d6acdde789f247b2d6->leave($__internal_bbc05bc3198d6fc8aea13f5eebc9c8eb8309e5eb13efb9d6acdde789f247b2d6_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c1cb376fcc2df9e6050dcec7f48c95644dc3f34b2c8e4b66d35aae2df2242f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1cb376fcc2df9e6050dcec7f48c95644dc3f34b2c8e4b66d35aae2df2242f4e->enter($__internal_c1cb376fcc2df9e6050dcec7f48c95644dc3f34b2c8e4b66d35aae2df2242f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2af035ad7e582ef2578ffa5843b7a047ae87d8143764477da8bb98923e49ba29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af035ad7e582ef2578ffa5843b7a047ae87d8143764477da8bb98923e49ba29->enter($__internal_2af035ad7e582ef2578ffa5843b7a047ae87d8143764477da8bb98923e49ba29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2af035ad7e582ef2578ffa5843b7a047ae87d8143764477da8bb98923e49ba29->leave($__internal_2af035ad7e582ef2578ffa5843b7a047ae87d8143764477da8bb98923e49ba29_prof);

        
        $__internal_c1cb376fcc2df9e6050dcec7f48c95644dc3f34b2c8e4b66d35aae2df2242f4e->leave($__internal_c1cb376fcc2df9e6050dcec7f48c95644dc3f34b2c8e4b66d35aae2df2242f4e_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0e20d9c3e7e61daf7aa7708df4493ec7fdfedb79e4a2b74e7b69225e8e3f585b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e20d9c3e7e61daf7aa7708df4493ec7fdfedb79e4a2b74e7b69225e8e3f585b->enter($__internal_0e20d9c3e7e61daf7aa7708df4493ec7fdfedb79e4a2b74e7b69225e8e3f585b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e10e2672ef511573186685a3af8eabc214db997ddf922834ce3e3daaae9cb63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10e2672ef511573186685a3af8eabc214db997ddf922834ce3e3daaae9cb63b->enter($__internal_e10e2672ef511573186685a3af8eabc214db997ddf922834ce3e3daaae9cb63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e10e2672ef511573186685a3af8eabc214db997ddf922834ce3e3daaae9cb63b->leave($__internal_e10e2672ef511573186685a3af8eabc214db997ddf922834ce3e3daaae9cb63b_prof);

        
        $__internal_0e20d9c3e7e61daf7aa7708df4493ec7fdfedb79e4a2b74e7b69225e8e3f585b->leave($__internal_0e20d9c3e7e61daf7aa7708df4493ec7fdfedb79e4a2b74e7b69225e8e3f585b_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1387eaa71329fa739e351987cd0b79ac786154748bf0a6bdc8c94f329d52d84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1387eaa71329fa739e351987cd0b79ac786154748bf0a6bdc8c94f329d52d84e->enter($__internal_1387eaa71329fa739e351987cd0b79ac786154748bf0a6bdc8c94f329d52d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f1d96f95cb9c92c1d550ad0ad9bcacbbd4850ba584199b0a3f8d3b932d7b7659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d96f95cb9c92c1d550ad0ad9bcacbbd4850ba584199b0a3f8d3b932d7b7659->enter($__internal_f1d96f95cb9c92c1d550ad0ad9bcacbbd4850ba584199b0a3f8d3b932d7b7659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f1d96f95cb9c92c1d550ad0ad9bcacbbd4850ba584199b0a3f8d3b932d7b7659->leave($__internal_f1d96f95cb9c92c1d550ad0ad9bcacbbd4850ba584199b0a3f8d3b932d7b7659_prof);

        
        $__internal_1387eaa71329fa739e351987cd0b79ac786154748bf0a6bdc8c94f329d52d84e->leave($__internal_1387eaa71329fa739e351987cd0b79ac786154748bf0a6bdc8c94f329d52d84e_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_bc24d9b36a3e83cade404570d27faac048458bc60fdc5382af0dee48b5e9621d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc24d9b36a3e83cade404570d27faac048458bc60fdc5382af0dee48b5e9621d->enter($__internal_bc24d9b36a3e83cade404570d27faac048458bc60fdc5382af0dee48b5e9621d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b20ca2f4fe467462362c2d02214bed599287126c0fe3fdd991f720dbb64d7f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20ca2f4fe467462362c2d02214bed599287126c0fe3fdd991f720dbb64d7f83->enter($__internal_b20ca2f4fe467462362c2d02214bed599287126c0fe3fdd991f720dbb64d7f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_59cab3165a63f17bb6abd63adbfcc4467c02c6dbe3ddff5df3bca66f984bf386 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_b72d3fbe3761c011af5d0e866b26bad9188289495968c2dad7ba22341d410bf2 = "{{") && ('' === $__internal_b72d3fbe3761c011af5d0e866b26bad9188289495968c2dad7ba22341d410bf2 || 0 === strpos($__internal_59cab3165a63f17bb6abd63adbfcc4467c02c6dbe3ddff5df3bca66f984bf386, $__internal_b72d3fbe3761c011af5d0e866b26bad9188289495968c2dad7ba22341d410bf2)));
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
        
        $__internal_b20ca2f4fe467462362c2d02214bed599287126c0fe3fdd991f720dbb64d7f83->leave($__internal_b20ca2f4fe467462362c2d02214bed599287126c0fe3fdd991f720dbb64d7f83_prof);

        
        $__internal_bc24d9b36a3e83cade404570d27faac048458bc60fdc5382af0dee48b5e9621d->leave($__internal_bc24d9b36a3e83cade404570d27faac048458bc60fdc5382af0dee48b5e9621d_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a3a4d105317a436d3a25fa7e45ead53809f5a4b0b4f71b79838a3a8d94942b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a4d105317a436d3a25fa7e45ead53809f5a4b0b4f71b79838a3a8d94942b89->enter($__internal_a3a4d105317a436d3a25fa7e45ead53809f5a4b0b4f71b79838a3a8d94942b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3027fb99d9e20f72e4480c5f3318ab40d2d960a934f243bedbb0001dc257e119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3027fb99d9e20f72e4480c5f3318ab40d2d960a934f243bedbb0001dc257e119->enter($__internal_3027fb99d9e20f72e4480c5f3318ab40d2d960a934f243bedbb0001dc257e119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_3027fb99d9e20f72e4480c5f3318ab40d2d960a934f243bedbb0001dc257e119->leave($__internal_3027fb99d9e20f72e4480c5f3318ab40d2d960a934f243bedbb0001dc257e119_prof);

        
        $__internal_a3a4d105317a436d3a25fa7e45ead53809f5a4b0b4f71b79838a3a8d94942b89->leave($__internal_a3a4d105317a436d3a25fa7e45ead53809f5a4b0b4f71b79838a3a8d94942b89_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_641f5db72ae61972d8fea1b96ece46ec3cdcdb72b1a2e0231a1bd9eb22015186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641f5db72ae61972d8fea1b96ece46ec3cdcdb72b1a2e0231a1bd9eb22015186->enter($__internal_641f5db72ae61972d8fea1b96ece46ec3cdcdb72b1a2e0231a1bd9eb22015186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bfa327192cdb6656781878b097330dd1e869621754d7d6caf7066314f9cac3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa327192cdb6656781878b097330dd1e869621754d7d6caf7066314f9cac3d4->enter($__internal_bfa327192cdb6656781878b097330dd1e869621754d7d6caf7066314f9cac3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_bfa327192cdb6656781878b097330dd1e869621754d7d6caf7066314f9cac3d4->leave($__internal_bfa327192cdb6656781878b097330dd1e869621754d7d6caf7066314f9cac3d4_prof);

        
        $__internal_641f5db72ae61972d8fea1b96ece46ec3cdcdb72b1a2e0231a1bd9eb22015186->leave($__internal_641f5db72ae61972d8fea1b96ece46ec3cdcdb72b1a2e0231a1bd9eb22015186_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3714490585bf8e098e5d22d75f4d3ee56af408ed910b5e9d47a04630b92e4427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3714490585bf8e098e5d22d75f4d3ee56af408ed910b5e9d47a04630b92e4427->enter($__internal_3714490585bf8e098e5d22d75f4d3ee56af408ed910b5e9d47a04630b92e4427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_bc92289ed28b474b7de6bdc0b0a699781f0abf10b336e72325e13b096e738d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc92289ed28b474b7de6bdc0b0a699781f0abf10b336e72325e13b096e738d48->enter($__internal_bc92289ed28b474b7de6bdc0b0a699781f0abf10b336e72325e13b096e738d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_bc92289ed28b474b7de6bdc0b0a699781f0abf10b336e72325e13b096e738d48->leave($__internal_bc92289ed28b474b7de6bdc0b0a699781f0abf10b336e72325e13b096e738d48_prof);

        
        $__internal_3714490585bf8e098e5d22d75f4d3ee56af408ed910b5e9d47a04630b92e4427->leave($__internal_3714490585bf8e098e5d22d75f4d3ee56af408ed910b5e9d47a04630b92e4427_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_894ea928022ebad777ca50412906c97aa15374bb29fd072a5ee29b490006bc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894ea928022ebad777ca50412906c97aa15374bb29fd072a5ee29b490006bc6d->enter($__internal_894ea928022ebad777ca50412906c97aa15374bb29fd072a5ee29b490006bc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_61c67579b7e92f075457ed01725c163f94ebb799453a164de5d4522073696382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c67579b7e92f075457ed01725c163f94ebb799453a164de5d4522073696382->enter($__internal_61c67579b7e92f075457ed01725c163f94ebb799453a164de5d4522073696382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_61c67579b7e92f075457ed01725c163f94ebb799453a164de5d4522073696382->leave($__internal_61c67579b7e92f075457ed01725c163f94ebb799453a164de5d4522073696382_prof);

        
        $__internal_894ea928022ebad777ca50412906c97aa15374bb29fd072a5ee29b490006bc6d->leave($__internal_894ea928022ebad777ca50412906c97aa15374bb29fd072a5ee29b490006bc6d_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_90a86838bfa981136fdbb2b2d9ac86f6f0df6ce2048274584cec081c50f8b5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a86838bfa981136fdbb2b2d9ac86f6f0df6ce2048274584cec081c50f8b5a2->enter($__internal_90a86838bfa981136fdbb2b2d9ac86f6f0df6ce2048274584cec081c50f8b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8c98c17f30b7480731215978227c5930a9abc2561c038104f477bba273f9b398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c98c17f30b7480731215978227c5930a9abc2561c038104f477bba273f9b398->enter($__internal_8c98c17f30b7480731215978227c5930a9abc2561c038104f477bba273f9b398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_8c98c17f30b7480731215978227c5930a9abc2561c038104f477bba273f9b398->leave($__internal_8c98c17f30b7480731215978227c5930a9abc2561c038104f477bba273f9b398_prof);

        
        $__internal_90a86838bfa981136fdbb2b2d9ac86f6f0df6ce2048274584cec081c50f8b5a2->leave($__internal_90a86838bfa981136fdbb2b2d9ac86f6f0df6ce2048274584cec081c50f8b5a2_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3716d5fcd7c12e63a54c72eee8d93c4122d807e369096faa176708fd4521ecbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3716d5fcd7c12e63a54c72eee8d93c4122d807e369096faa176708fd4521ecbb->enter($__internal_3716d5fcd7c12e63a54c72eee8d93c4122d807e369096faa176708fd4521ecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a85bc02c85e54a7c90b3a97c9d1aa6baee8940ccfc45637ae44fb681a78568aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85bc02c85e54a7c90b3a97c9d1aa6baee8940ccfc45637ae44fb681a78568aa->enter($__internal_a85bc02c85e54a7c90b3a97c9d1aa6baee8940ccfc45637ae44fb681a78568aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a85bc02c85e54a7c90b3a97c9d1aa6baee8940ccfc45637ae44fb681a78568aa->leave($__internal_a85bc02c85e54a7c90b3a97c9d1aa6baee8940ccfc45637ae44fb681a78568aa_prof);

        
        $__internal_3716d5fcd7c12e63a54c72eee8d93c4122d807e369096faa176708fd4521ecbb->leave($__internal_3716d5fcd7c12e63a54c72eee8d93c4122d807e369096faa176708fd4521ecbb_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_cb3d7b5c06a214b4ab5481eee7e5832e76f866529dc5f4a0d99f82f847529868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3d7b5c06a214b4ab5481eee7e5832e76f866529dc5f4a0d99f82f847529868->enter($__internal_cb3d7b5c06a214b4ab5481eee7e5832e76f866529dc5f4a0d99f82f847529868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c0db4d6d1f432b6f90d6aba1a3e4b675eec562f8f7be506f62b81d0aaefc327c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0db4d6d1f432b6f90d6aba1a3e4b675eec562f8f7be506f62b81d0aaefc327c->enter($__internal_c0db4d6d1f432b6f90d6aba1a3e4b675eec562f8f7be506f62b81d0aaefc327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_c0db4d6d1f432b6f90d6aba1a3e4b675eec562f8f7be506f62b81d0aaefc327c->leave($__internal_c0db4d6d1f432b6f90d6aba1a3e4b675eec562f8f7be506f62b81d0aaefc327c_prof);

        
        $__internal_cb3d7b5c06a214b4ab5481eee7e5832e76f866529dc5f4a0d99f82f847529868->leave($__internal_cb3d7b5c06a214b4ab5481eee7e5832e76f866529dc5f4a0d99f82f847529868_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_48b255c2d1e493c248a1b71cc32638c4ad616ab7b22788346ea77b1abbe0f247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b255c2d1e493c248a1b71cc32638c4ad616ab7b22788346ea77b1abbe0f247->enter($__internal_48b255c2d1e493c248a1b71cc32638c4ad616ab7b22788346ea77b1abbe0f247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b0582534717c34b13029dbc9ed221b29c1224ff25f64e473e29f668bf3b48f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0582534717c34b13029dbc9ed221b29c1224ff25f64e473e29f668bf3b48f01->enter($__internal_b0582534717c34b13029dbc9ed221b29c1224ff25f64e473e29f668bf3b48f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b0582534717c34b13029dbc9ed221b29c1224ff25f64e473e29f668bf3b48f01->leave($__internal_b0582534717c34b13029dbc9ed221b29c1224ff25f64e473e29f668bf3b48f01_prof);

        
        $__internal_48b255c2d1e493c248a1b71cc32638c4ad616ab7b22788346ea77b1abbe0f247->leave($__internal_48b255c2d1e493c248a1b71cc32638c4ad616ab7b22788346ea77b1abbe0f247_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e4011521e5035400b69f3f6781ecc41ebf3bf846d7bead4eb5cb549837ef48be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4011521e5035400b69f3f6781ecc41ebf3bf846d7bead4eb5cb549837ef48be->enter($__internal_e4011521e5035400b69f3f6781ecc41ebf3bf846d7bead4eb5cb549837ef48be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0cb0d325927c9b64083c7f287350519b8ebf357c60aab7921e3a8c114d23c669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb0d325927c9b64083c7f287350519b8ebf357c60aab7921e3a8c114d23c669->enter($__internal_0cb0d325927c9b64083c7f287350519b8ebf357c60aab7921e3a8c114d23c669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0cb0d325927c9b64083c7f287350519b8ebf357c60aab7921e3a8c114d23c669->leave($__internal_0cb0d325927c9b64083c7f287350519b8ebf357c60aab7921e3a8c114d23c669_prof);

        
        $__internal_e4011521e5035400b69f3f6781ecc41ebf3bf846d7bead4eb5cb549837ef48be->leave($__internal_e4011521e5035400b69f3f6781ecc41ebf3bf846d7bead4eb5cb549837ef48be_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1fa371886b86379712e5100bd822811a116476c4d62b23d9e047074331aff769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa371886b86379712e5100bd822811a116476c4d62b23d9e047074331aff769->enter($__internal_1fa371886b86379712e5100bd822811a116476c4d62b23d9e047074331aff769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a63b6e79be0b64f2ede9f4b8fb04840c41dd3430fd47c0036961020f27e45253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63b6e79be0b64f2ede9f4b8fb04840c41dd3430fd47c0036961020f27e45253->enter($__internal_a63b6e79be0b64f2ede9f4b8fb04840c41dd3430fd47c0036961020f27e45253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a63b6e79be0b64f2ede9f4b8fb04840c41dd3430fd47c0036961020f27e45253->leave($__internal_a63b6e79be0b64f2ede9f4b8fb04840c41dd3430fd47c0036961020f27e45253_prof);

        
        $__internal_1fa371886b86379712e5100bd822811a116476c4d62b23d9e047074331aff769->leave($__internal_1fa371886b86379712e5100bd822811a116476c4d62b23d9e047074331aff769_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0ebd3b5f19a09e6cf2f654d6ccd062a799af7249327fe8d2d69a18f7355e6b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebd3b5f19a09e6cf2f654d6ccd062a799af7249327fe8d2d69a18f7355e6b79->enter($__internal_0ebd3b5f19a09e6cf2f654d6ccd062a799af7249327fe8d2d69a18f7355e6b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_dcf14581ef11823eac93eca8b643cbb69ea87ede98a7ae15231efb5741dfce29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf14581ef11823eac93eca8b643cbb69ea87ede98a7ae15231efb5741dfce29->enter($__internal_dcf14581ef11823eac93eca8b643cbb69ea87ede98a7ae15231efb5741dfce29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_dcf14581ef11823eac93eca8b643cbb69ea87ede98a7ae15231efb5741dfce29->leave($__internal_dcf14581ef11823eac93eca8b643cbb69ea87ede98a7ae15231efb5741dfce29_prof);

        
        $__internal_0ebd3b5f19a09e6cf2f654d6ccd062a799af7249327fe8d2d69a18f7355e6b79->leave($__internal_0ebd3b5f19a09e6cf2f654d6ccd062a799af7249327fe8d2d69a18f7355e6b79_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b928a8673247f7dc02e3ec58155a24a2514472cb7461835f3df2acd8af1df83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b928a8673247f7dc02e3ec58155a24a2514472cb7461835f3df2acd8af1df83b->enter($__internal_b928a8673247f7dc02e3ec58155a24a2514472cb7461835f3df2acd8af1df83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ed92d7399e7b79e9fc2eb67e4b5ed6fc804a255107015ab14c05020a95dea0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed92d7399e7b79e9fc2eb67e4b5ed6fc804a255107015ab14c05020a95dea0a4->enter($__internal_ed92d7399e7b79e9fc2eb67e4b5ed6fc804a255107015ab14c05020a95dea0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ed92d7399e7b79e9fc2eb67e4b5ed6fc804a255107015ab14c05020a95dea0a4->leave($__internal_ed92d7399e7b79e9fc2eb67e4b5ed6fc804a255107015ab14c05020a95dea0a4_prof);

        
        $__internal_b928a8673247f7dc02e3ec58155a24a2514472cb7461835f3df2acd8af1df83b->leave($__internal_b928a8673247f7dc02e3ec58155a24a2514472cb7461835f3df2acd8af1df83b_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_38bff4221262a02640d625d7f07e5c36662c41ecfd8a5bde0505f870c2702913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bff4221262a02640d625d7f07e5c36662c41ecfd8a5bde0505f870c2702913->enter($__internal_38bff4221262a02640d625d7f07e5c36662c41ecfd8a5bde0505f870c2702913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_534ab3a8cc15a740e44e225723c32e970988f5fd6706b715a37bcfa5e6173c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534ab3a8cc15a740e44e225723c32e970988f5fd6706b715a37bcfa5e6173c06->enter($__internal_534ab3a8cc15a740e44e225723c32e970988f5fd6706b715a37bcfa5e6173c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_534ab3a8cc15a740e44e225723c32e970988f5fd6706b715a37bcfa5e6173c06->leave($__internal_534ab3a8cc15a740e44e225723c32e970988f5fd6706b715a37bcfa5e6173c06_prof);

        
        $__internal_38bff4221262a02640d625d7f07e5c36662c41ecfd8a5bde0505f870c2702913->leave($__internal_38bff4221262a02640d625d7f07e5c36662c41ecfd8a5bde0505f870c2702913_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_dfbdba878ae77ccc16333bde91002fd4ba9efa0254ad006c14446876bc2d4297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbdba878ae77ccc16333bde91002fd4ba9efa0254ad006c14446876bc2d4297->enter($__internal_dfbdba878ae77ccc16333bde91002fd4ba9efa0254ad006c14446876bc2d4297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f33dcee4b2e3ce3f59b801e8c37996a94e9ab0c111e7cc63fb8caccc28dfedd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33dcee4b2e3ce3f59b801e8c37996a94e9ab0c111e7cc63fb8caccc28dfedd7->enter($__internal_f33dcee4b2e3ce3f59b801e8c37996a94e9ab0c111e7cc63fb8caccc28dfedd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f33dcee4b2e3ce3f59b801e8c37996a94e9ab0c111e7cc63fb8caccc28dfedd7->leave($__internal_f33dcee4b2e3ce3f59b801e8c37996a94e9ab0c111e7cc63fb8caccc28dfedd7_prof);

        
        $__internal_dfbdba878ae77ccc16333bde91002fd4ba9efa0254ad006c14446876bc2d4297->leave($__internal_dfbdba878ae77ccc16333bde91002fd4ba9efa0254ad006c14446876bc2d4297_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d6f8546d4798df0ee050b446c855fbb6cf9fa5363e9aaa88bc3e1cd7ebeb66f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f8546d4798df0ee050b446c855fbb6cf9fa5363e9aaa88bc3e1cd7ebeb66f6->enter($__internal_d6f8546d4798df0ee050b446c855fbb6cf9fa5363e9aaa88bc3e1cd7ebeb66f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b56eca333215cb36f2a26a469aeb5852ff0691836b0257d3a9e2ee1d2b96dabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56eca333215cb36f2a26a469aeb5852ff0691836b0257d3a9e2ee1d2b96dabf->enter($__internal_b56eca333215cb36f2a26a469aeb5852ff0691836b0257d3a9e2ee1d2b96dabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b56eca333215cb36f2a26a469aeb5852ff0691836b0257d3a9e2ee1d2b96dabf->leave($__internal_b56eca333215cb36f2a26a469aeb5852ff0691836b0257d3a9e2ee1d2b96dabf_prof);

        
        $__internal_d6f8546d4798df0ee050b446c855fbb6cf9fa5363e9aaa88bc3e1cd7ebeb66f6->leave($__internal_d6f8546d4798df0ee050b446c855fbb6cf9fa5363e9aaa88bc3e1cd7ebeb66f6_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_dc643121b9a65b159884167bb954e51a28096a901426c7d2901b7d024ccc1c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc643121b9a65b159884167bb954e51a28096a901426c7d2901b7d024ccc1c28->enter($__internal_dc643121b9a65b159884167bb954e51a28096a901426c7d2901b7d024ccc1c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_88507eec50f74f2916b2b7f62f5a7f88434254c6f93ffbb8b3abdd08a8ea407d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88507eec50f74f2916b2b7f62f5a7f88434254c6f93ffbb8b3abdd08a8ea407d->enter($__internal_88507eec50f74f2916b2b7f62f5a7f88434254c6f93ffbb8b3abdd08a8ea407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_88507eec50f74f2916b2b7f62f5a7f88434254c6f93ffbb8b3abdd08a8ea407d->leave($__internal_88507eec50f74f2916b2b7f62f5a7f88434254c6f93ffbb8b3abdd08a8ea407d_prof);

        
        $__internal_dc643121b9a65b159884167bb954e51a28096a901426c7d2901b7d024ccc1c28->leave($__internal_dc643121b9a65b159884167bb954e51a28096a901426c7d2901b7d024ccc1c28_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7e6ef02ce55251d04e3b12891a14741585fc25bda90a38e9bff508b590d8d1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6ef02ce55251d04e3b12891a14741585fc25bda90a38e9bff508b590d8d1bb->enter($__internal_7e6ef02ce55251d04e3b12891a14741585fc25bda90a38e9bff508b590d8d1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_654b47ed475bc788ce668865415398df82552d58864c08d8c519a1bb8a07b066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654b47ed475bc788ce668865415398df82552d58864c08d8c519a1bb8a07b066->enter($__internal_654b47ed475bc788ce668865415398df82552d58864c08d8c519a1bb8a07b066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_654b47ed475bc788ce668865415398df82552d58864c08d8c519a1bb8a07b066->leave($__internal_654b47ed475bc788ce668865415398df82552d58864c08d8c519a1bb8a07b066_prof);

        
        $__internal_7e6ef02ce55251d04e3b12891a14741585fc25bda90a38e9bff508b590d8d1bb->leave($__internal_7e6ef02ce55251d04e3b12891a14741585fc25bda90a38e9bff508b590d8d1bb_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_94b3d6e1d1e927be1e844bad883ebb52323ded7a42c9aad5efd72994990eef23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b3d6e1d1e927be1e844bad883ebb52323ded7a42c9aad5efd72994990eef23->enter($__internal_94b3d6e1d1e927be1e844bad883ebb52323ded7a42c9aad5efd72994990eef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0cc85ca6dc31ace440af5ea7cd2a2e3908fcea4bf88466123bd96a7b480cde08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc85ca6dc31ace440af5ea7cd2a2e3908fcea4bf88466123bd96a7b480cde08->enter($__internal_0cc85ca6dc31ace440af5ea7cd2a2e3908fcea4bf88466123bd96a7b480cde08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0cc85ca6dc31ace440af5ea7cd2a2e3908fcea4bf88466123bd96a7b480cde08->leave($__internal_0cc85ca6dc31ace440af5ea7cd2a2e3908fcea4bf88466123bd96a7b480cde08_prof);

        
        $__internal_94b3d6e1d1e927be1e844bad883ebb52323ded7a42c9aad5efd72994990eef23->leave($__internal_94b3d6e1d1e927be1e844bad883ebb52323ded7a42c9aad5efd72994990eef23_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0ea4b14849027aea22fe68b200150dbc8cf5b956a3d88c77d80d2bf22a8c71f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea4b14849027aea22fe68b200150dbc8cf5b956a3d88c77d80d2bf22a8c71f6->enter($__internal_0ea4b14849027aea22fe68b200150dbc8cf5b956a3d88c77d80d2bf22a8c71f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_49c3db28ae976556857637d4b3d45299b122aa9355c6f6e82b8822cfabbce91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c3db28ae976556857637d4b3d45299b122aa9355c6f6e82b8822cfabbce91a->enter($__internal_49c3db28ae976556857637d4b3d45299b122aa9355c6f6e82b8822cfabbce91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_49c3db28ae976556857637d4b3d45299b122aa9355c6f6e82b8822cfabbce91a->leave($__internal_49c3db28ae976556857637d4b3d45299b122aa9355c6f6e82b8822cfabbce91a_prof);

        
        $__internal_0ea4b14849027aea22fe68b200150dbc8cf5b956a3d88c77d80d2bf22a8c71f6->leave($__internal_0ea4b14849027aea22fe68b200150dbc8cf5b956a3d88c77d80d2bf22a8c71f6_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1dfe4e998a3a0c41c2820b33f38706f488ccfebe8065a985fc77bf58daceab0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dfe4e998a3a0c41c2820b33f38706f488ccfebe8065a985fc77bf58daceab0a->enter($__internal_1dfe4e998a3a0c41c2820b33f38706f488ccfebe8065a985fc77bf58daceab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4be105a310bcaea602f30b1fc5478f7231f7b58441548572281a4bc5d6232181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be105a310bcaea602f30b1fc5478f7231f7b58441548572281a4bc5d6232181->enter($__internal_4be105a310bcaea602f30b1fc5478f7231f7b58441548572281a4bc5d6232181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4be105a310bcaea602f30b1fc5478f7231f7b58441548572281a4bc5d6232181->leave($__internal_4be105a310bcaea602f30b1fc5478f7231f7b58441548572281a4bc5d6232181_prof);

        
        $__internal_1dfe4e998a3a0c41c2820b33f38706f488ccfebe8065a985fc77bf58daceab0a->leave($__internal_1dfe4e998a3a0c41c2820b33f38706f488ccfebe8065a985fc77bf58daceab0a_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a02ea007e819098461efdeec8a869bdb1eccaf37933dd8b5b053621f932675f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02ea007e819098461efdeec8a869bdb1eccaf37933dd8b5b053621f932675f9->enter($__internal_a02ea007e819098461efdeec8a869bdb1eccaf37933dd8b5b053621f932675f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7e18ed1e9986dc16c89f0bb7aa00fc2c891c2ce0ae07d050e429f9f5627f57d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e18ed1e9986dc16c89f0bb7aa00fc2c891c2ce0ae07d050e429f9f5627f57d4->enter($__internal_7e18ed1e9986dc16c89f0bb7aa00fc2c891c2ce0ae07d050e429f9f5627f57d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_7e18ed1e9986dc16c89f0bb7aa00fc2c891c2ce0ae07d050e429f9f5627f57d4->leave($__internal_7e18ed1e9986dc16c89f0bb7aa00fc2c891c2ce0ae07d050e429f9f5627f57d4_prof);

        
        $__internal_a02ea007e819098461efdeec8a869bdb1eccaf37933dd8b5b053621f932675f9->leave($__internal_a02ea007e819098461efdeec8a869bdb1eccaf37933dd8b5b053621f932675f9_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_14adac0cdc6f86a0fea9a55365474012207fc26d2b65d21cd9797095550fac85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14adac0cdc6f86a0fea9a55365474012207fc26d2b65d21cd9797095550fac85->enter($__internal_14adac0cdc6f86a0fea9a55365474012207fc26d2b65d21cd9797095550fac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_46daebe193f54c6054ef450fda7c6dd60f8eac7e72025cf9271baf02f7fa12bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46daebe193f54c6054ef450fda7c6dd60f8eac7e72025cf9271baf02f7fa12bc->enter($__internal_46daebe193f54c6054ef450fda7c6dd60f8eac7e72025cf9271baf02f7fa12bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_46daebe193f54c6054ef450fda7c6dd60f8eac7e72025cf9271baf02f7fa12bc->leave($__internal_46daebe193f54c6054ef450fda7c6dd60f8eac7e72025cf9271baf02f7fa12bc_prof);

        
        $__internal_14adac0cdc6f86a0fea9a55365474012207fc26d2b65d21cd9797095550fac85->leave($__internal_14adac0cdc6f86a0fea9a55365474012207fc26d2b65d21cd9797095550fac85_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_71c872d9101b7ec90c5868210a00ca0eff06985f295bd84c27f5238bc162e5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c872d9101b7ec90c5868210a00ca0eff06985f295bd84c27f5238bc162e5fe->enter($__internal_71c872d9101b7ec90c5868210a00ca0eff06985f295bd84c27f5238bc162e5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_79b75c4df7b8a1f33aa34a6ee4e67fa3f5039f2a3a2c3641771dea597d1a2f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b75c4df7b8a1f33aa34a6ee4e67fa3f5039f2a3a2c3641771dea597d1a2f1f->enter($__internal_79b75c4df7b8a1f33aa34a6ee4e67fa3f5039f2a3a2c3641771dea597d1a2f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_79b75c4df7b8a1f33aa34a6ee4e67fa3f5039f2a3a2c3641771dea597d1a2f1f->leave($__internal_79b75c4df7b8a1f33aa34a6ee4e67fa3f5039f2a3a2c3641771dea597d1a2f1f_prof);

        
        $__internal_71c872d9101b7ec90c5868210a00ca0eff06985f295bd84c27f5238bc162e5fe->leave($__internal_71c872d9101b7ec90c5868210a00ca0eff06985f295bd84c27f5238bc162e5fe_prof);

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
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
