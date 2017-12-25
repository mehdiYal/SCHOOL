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
        $__internal_da3878c676644b8dad659d482f4e00ce11aaeaab1bc9a10f1ee8b3d61b69fda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3878c676644b8dad659d482f4e00ce11aaeaab1bc9a10f1ee8b3d61b69fda7->enter($__internal_da3878c676644b8dad659d482f4e00ce11aaeaab1bc9a10f1ee8b3d61b69fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_04b385953466334156045ad909aef02db731464ab500327a0fba67c6b22a894c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b385953466334156045ad909aef02db731464ab500327a0fba67c6b22a894c->enter($__internal_04b385953466334156045ad909aef02db731464ab500327a0fba67c6b22a894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_da3878c676644b8dad659d482f4e00ce11aaeaab1bc9a10f1ee8b3d61b69fda7->leave($__internal_da3878c676644b8dad659d482f4e00ce11aaeaab1bc9a10f1ee8b3d61b69fda7_prof);

        
        $__internal_04b385953466334156045ad909aef02db731464ab500327a0fba67c6b22a894c->leave($__internal_04b385953466334156045ad909aef02db731464ab500327a0fba67c6b22a894c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_96b0e956b587c18eb913fe51aca5928a82500d2ea63560039a53ceb3feab8577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b0e956b587c18eb913fe51aca5928a82500d2ea63560039a53ceb3feab8577->enter($__internal_96b0e956b587c18eb913fe51aca5928a82500d2ea63560039a53ceb3feab8577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2ad953a3ec63a627b764e147ff19ff0e8586bb7d54b860fa96a469235afa251c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad953a3ec63a627b764e147ff19ff0e8586bb7d54b860fa96a469235afa251c->enter($__internal_2ad953a3ec63a627b764e147ff19ff0e8586bb7d54b860fa96a469235afa251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2ad953a3ec63a627b764e147ff19ff0e8586bb7d54b860fa96a469235afa251c->leave($__internal_2ad953a3ec63a627b764e147ff19ff0e8586bb7d54b860fa96a469235afa251c_prof);

        
        $__internal_96b0e956b587c18eb913fe51aca5928a82500d2ea63560039a53ceb3feab8577->leave($__internal_96b0e956b587c18eb913fe51aca5928a82500d2ea63560039a53ceb3feab8577_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_667e89f2e656d864179eeeb5e9f291318354dce169fc36e6f9130d7e483250e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667e89f2e656d864179eeeb5e9f291318354dce169fc36e6f9130d7e483250e6->enter($__internal_667e89f2e656d864179eeeb5e9f291318354dce169fc36e6f9130d7e483250e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_65e2e47c39787a62185f0010e6fd1d64eb4fecd7774ea5f41cd8fdfa75b949ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e2e47c39787a62185f0010e6fd1d64eb4fecd7774ea5f41cd8fdfa75b949ab->enter($__internal_65e2e47c39787a62185f0010e6fd1d64eb4fecd7774ea5f41cd8fdfa75b949ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_65e2e47c39787a62185f0010e6fd1d64eb4fecd7774ea5f41cd8fdfa75b949ab->leave($__internal_65e2e47c39787a62185f0010e6fd1d64eb4fecd7774ea5f41cd8fdfa75b949ab_prof);

        
        $__internal_667e89f2e656d864179eeeb5e9f291318354dce169fc36e6f9130d7e483250e6->leave($__internal_667e89f2e656d864179eeeb5e9f291318354dce169fc36e6f9130d7e483250e6_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f922053c287575399559751c27177ceec622b3a25a772e79c80490190def2044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f922053c287575399559751c27177ceec622b3a25a772e79c80490190def2044->enter($__internal_f922053c287575399559751c27177ceec622b3a25a772e79c80490190def2044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0bc231db38ae3e509fec906703b30ca1f4eba676a22d691992bc4355e7a3371c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc231db38ae3e509fec906703b30ca1f4eba676a22d691992bc4355e7a3371c->enter($__internal_0bc231db38ae3e509fec906703b30ca1f4eba676a22d691992bc4355e7a3371c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0bc231db38ae3e509fec906703b30ca1f4eba676a22d691992bc4355e7a3371c->leave($__internal_0bc231db38ae3e509fec906703b30ca1f4eba676a22d691992bc4355e7a3371c_prof);

        
        $__internal_f922053c287575399559751c27177ceec622b3a25a772e79c80490190def2044->leave($__internal_f922053c287575399559751c27177ceec622b3a25a772e79c80490190def2044_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d45d106c5a31fa53ad6d4ff4d8d5c963741729a6ac85ea7d5bdc01aa75ff793c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45d106c5a31fa53ad6d4ff4d8d5c963741729a6ac85ea7d5bdc01aa75ff793c->enter($__internal_d45d106c5a31fa53ad6d4ff4d8d5c963741729a6ac85ea7d5bdc01aa75ff793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9154d8a1911af541b1147228dc38784768db0b222e61c51d11c83b164fafa0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9154d8a1911af541b1147228dc38784768db0b222e61c51d11c83b164fafa0a5->enter($__internal_9154d8a1911af541b1147228dc38784768db0b222e61c51d11c83b164fafa0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_df5b4ea284fe3f986edbb722ffb5848b0b4b734b8789ac87a010273164731053 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_2112fb1bb2c43b3976926243a0a3d406b382cb889a3e630481f06a91b05de54e = "{{") && ('' === $__internal_2112fb1bb2c43b3976926243a0a3d406b382cb889a3e630481f06a91b05de54e || 0 === strpos($__internal_df5b4ea284fe3f986edbb722ffb5848b0b4b734b8789ac87a010273164731053, $__internal_2112fb1bb2c43b3976926243a0a3d406b382cb889a3e630481f06a91b05de54e)));
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
        
        $__internal_9154d8a1911af541b1147228dc38784768db0b222e61c51d11c83b164fafa0a5->leave($__internal_9154d8a1911af541b1147228dc38784768db0b222e61c51d11c83b164fafa0a5_prof);

        
        $__internal_d45d106c5a31fa53ad6d4ff4d8d5c963741729a6ac85ea7d5bdc01aa75ff793c->leave($__internal_d45d106c5a31fa53ad6d4ff4d8d5c963741729a6ac85ea7d5bdc01aa75ff793c_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_cd6e7616bb3afc094c6aa638432397b8721b4a99a63cdfda85ac096b5481e1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6e7616bb3afc094c6aa638432397b8721b4a99a63cdfda85ac096b5481e1de->enter($__internal_cd6e7616bb3afc094c6aa638432397b8721b4a99a63cdfda85ac096b5481e1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_28e503b7d33f09feacf73efe5aea495e2f42cfa47fbde7e1b6454fca7da458d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e503b7d33f09feacf73efe5aea495e2f42cfa47fbde7e1b6454fca7da458d3->enter($__internal_28e503b7d33f09feacf73efe5aea495e2f42cfa47fbde7e1b6454fca7da458d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_28e503b7d33f09feacf73efe5aea495e2f42cfa47fbde7e1b6454fca7da458d3->leave($__internal_28e503b7d33f09feacf73efe5aea495e2f42cfa47fbde7e1b6454fca7da458d3_prof);

        
        $__internal_cd6e7616bb3afc094c6aa638432397b8721b4a99a63cdfda85ac096b5481e1de->leave($__internal_cd6e7616bb3afc094c6aa638432397b8721b4a99a63cdfda85ac096b5481e1de_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_010d090ed0f5d092633b4574bd4e3421c699e7fce0389096805b2f8fbe383ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010d090ed0f5d092633b4574bd4e3421c699e7fce0389096805b2f8fbe383ce6->enter($__internal_010d090ed0f5d092633b4574bd4e3421c699e7fce0389096805b2f8fbe383ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_7c5e8f2a7b61cfd547bc9251c1235c77604bd6af654dce27f178fde511f7c246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5e8f2a7b61cfd547bc9251c1235c77604bd6af654dce27f178fde511f7c246->enter($__internal_7c5e8f2a7b61cfd547bc9251c1235c77604bd6af654dce27f178fde511f7c246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_7c5e8f2a7b61cfd547bc9251c1235c77604bd6af654dce27f178fde511f7c246->leave($__internal_7c5e8f2a7b61cfd547bc9251c1235c77604bd6af654dce27f178fde511f7c246_prof);

        
        $__internal_010d090ed0f5d092633b4574bd4e3421c699e7fce0389096805b2f8fbe383ce6->leave($__internal_010d090ed0f5d092633b4574bd4e3421c699e7fce0389096805b2f8fbe383ce6_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7fcc9407d25fcbd647f872e7df96b7481041cbb44a64ba120a0820864a82948e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcc9407d25fcbd647f872e7df96b7481041cbb44a64ba120a0820864a82948e->enter($__internal_7fcc9407d25fcbd647f872e7df96b7481041cbb44a64ba120a0820864a82948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f1c96c7db85ebf9761968c21d545caec0d7f0945ca9b8f6762187a2181f01a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c96c7db85ebf9761968c21d545caec0d7f0945ca9b8f6762187a2181f01a5e->enter($__internal_f1c96c7db85ebf9761968c21d545caec0d7f0945ca9b8f6762187a2181f01a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_f1c96c7db85ebf9761968c21d545caec0d7f0945ca9b8f6762187a2181f01a5e->leave($__internal_f1c96c7db85ebf9761968c21d545caec0d7f0945ca9b8f6762187a2181f01a5e_prof);

        
        $__internal_7fcc9407d25fcbd647f872e7df96b7481041cbb44a64ba120a0820864a82948e->leave($__internal_7fcc9407d25fcbd647f872e7df96b7481041cbb44a64ba120a0820864a82948e_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3d60f91e17d9266d247c8f417a379b744c25ae02d126d5fae7b028032be1f4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d60f91e17d9266d247c8f417a379b744c25ae02d126d5fae7b028032be1f4cc->enter($__internal_3d60f91e17d9266d247c8f417a379b744c25ae02d126d5fae7b028032be1f4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_174f6fc16018a4d07f1a3c607138685ea34d10c5cb222a6c08699648da3881ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174f6fc16018a4d07f1a3c607138685ea34d10c5cb222a6c08699648da3881ce->enter($__internal_174f6fc16018a4d07f1a3c607138685ea34d10c5cb222a6c08699648da3881ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_174f6fc16018a4d07f1a3c607138685ea34d10c5cb222a6c08699648da3881ce->leave($__internal_174f6fc16018a4d07f1a3c607138685ea34d10c5cb222a6c08699648da3881ce_prof);

        
        $__internal_3d60f91e17d9266d247c8f417a379b744c25ae02d126d5fae7b028032be1f4cc->leave($__internal_3d60f91e17d9266d247c8f417a379b744c25ae02d126d5fae7b028032be1f4cc_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f42fa9bbf80b2094e09b7d06582f1280b7056b0a630f003998873b47978a2204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42fa9bbf80b2094e09b7d06582f1280b7056b0a630f003998873b47978a2204->enter($__internal_f42fa9bbf80b2094e09b7d06582f1280b7056b0a630f003998873b47978a2204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1eb05748c63cfd43fc72548a0e6fbf8ea54821c56d7f12487e9d44e03c3052cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb05748c63cfd43fc72548a0e6fbf8ea54821c56d7f12487e9d44e03c3052cb->enter($__internal_1eb05748c63cfd43fc72548a0e6fbf8ea54821c56d7f12487e9d44e03c3052cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_1eb05748c63cfd43fc72548a0e6fbf8ea54821c56d7f12487e9d44e03c3052cb->leave($__internal_1eb05748c63cfd43fc72548a0e6fbf8ea54821c56d7f12487e9d44e03c3052cb_prof);

        
        $__internal_f42fa9bbf80b2094e09b7d06582f1280b7056b0a630f003998873b47978a2204->leave($__internal_f42fa9bbf80b2094e09b7d06582f1280b7056b0a630f003998873b47978a2204_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b3555632767bfeaf61782b54947d200e2d456bc204543d8caf412bc2a0454d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3555632767bfeaf61782b54947d200e2d456bc204543d8caf412bc2a0454d23->enter($__internal_b3555632767bfeaf61782b54947d200e2d456bc204543d8caf412bc2a0454d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1b36db8c7a8559d30763fb39c1d53ffda5fab16fc5ea31e1abe70e312e2e3dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b36db8c7a8559d30763fb39c1d53ffda5fab16fc5ea31e1abe70e312e2e3dfc->enter($__internal_1b36db8c7a8559d30763fb39c1d53ffda5fab16fc5ea31e1abe70e312e2e3dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1b36db8c7a8559d30763fb39c1d53ffda5fab16fc5ea31e1abe70e312e2e3dfc->leave($__internal_1b36db8c7a8559d30763fb39c1d53ffda5fab16fc5ea31e1abe70e312e2e3dfc_prof);

        
        $__internal_b3555632767bfeaf61782b54947d200e2d456bc204543d8caf412bc2a0454d23->leave($__internal_b3555632767bfeaf61782b54947d200e2d456bc204543d8caf412bc2a0454d23_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5f1ad1c957ffec687962456378312bcdbadf9308d90ce10f3164796dd5a893b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1ad1c957ffec687962456378312bcdbadf9308d90ce10f3164796dd5a893b7->enter($__internal_5f1ad1c957ffec687962456378312bcdbadf9308d90ce10f3164796dd5a893b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_864b31914e692893ebad875e7f5d44fb604c1eb85c4fd21189b81eec1dc5f02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864b31914e692893ebad875e7f5d44fb604c1eb85c4fd21189b81eec1dc5f02b->enter($__internal_864b31914e692893ebad875e7f5d44fb604c1eb85c4fd21189b81eec1dc5f02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_864b31914e692893ebad875e7f5d44fb604c1eb85c4fd21189b81eec1dc5f02b->leave($__internal_864b31914e692893ebad875e7f5d44fb604c1eb85c4fd21189b81eec1dc5f02b_prof);

        
        $__internal_5f1ad1c957ffec687962456378312bcdbadf9308d90ce10f3164796dd5a893b7->leave($__internal_5f1ad1c957ffec687962456378312bcdbadf9308d90ce10f3164796dd5a893b7_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bbf530e4beeff5baa875ecbf994e8456742bb2a7f295358d99a81404b5c3a539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf530e4beeff5baa875ecbf994e8456742bb2a7f295358d99a81404b5c3a539->enter($__internal_bbf530e4beeff5baa875ecbf994e8456742bb2a7f295358d99a81404b5c3a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_43ba6aafc61dae16cf903c309abc5fa237f6d91526009d6477028146fad1d558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ba6aafc61dae16cf903c309abc5fa237f6d91526009d6477028146fad1d558->enter($__internal_43ba6aafc61dae16cf903c309abc5fa237f6d91526009d6477028146fad1d558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_43ba6aafc61dae16cf903c309abc5fa237f6d91526009d6477028146fad1d558->leave($__internal_43ba6aafc61dae16cf903c309abc5fa237f6d91526009d6477028146fad1d558_prof);

        
        $__internal_bbf530e4beeff5baa875ecbf994e8456742bb2a7f295358d99a81404b5c3a539->leave($__internal_bbf530e4beeff5baa875ecbf994e8456742bb2a7f295358d99a81404b5c3a539_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b522bec305038df212402fa1865888133893eb5c6f544736f7799c55e9027498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b522bec305038df212402fa1865888133893eb5c6f544736f7799c55e9027498->enter($__internal_b522bec305038df212402fa1865888133893eb5c6f544736f7799c55e9027498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c4fa20204e51105d5c75ac69d90726f02d341715d4ef1d53cb75bd7a1c95ccb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fa20204e51105d5c75ac69d90726f02d341715d4ef1d53cb75bd7a1c95ccb4->enter($__internal_c4fa20204e51105d5c75ac69d90726f02d341715d4ef1d53cb75bd7a1c95ccb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c4fa20204e51105d5c75ac69d90726f02d341715d4ef1d53cb75bd7a1c95ccb4->leave($__internal_c4fa20204e51105d5c75ac69d90726f02d341715d4ef1d53cb75bd7a1c95ccb4_prof);

        
        $__internal_b522bec305038df212402fa1865888133893eb5c6f544736f7799c55e9027498->leave($__internal_b522bec305038df212402fa1865888133893eb5c6f544736f7799c55e9027498_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_72920b4f9e2286d0d1a54cd62973ecc443df95804914bf6da68e06f06f8eafaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72920b4f9e2286d0d1a54cd62973ecc443df95804914bf6da68e06f06f8eafaf->enter($__internal_72920b4f9e2286d0d1a54cd62973ecc443df95804914bf6da68e06f06f8eafaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c29c4ea073c569a2101b15f8f8cf928722864251ff2ca69a7c51d43b83aa7f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29c4ea073c569a2101b15f8f8cf928722864251ff2ca69a7c51d43b83aa7f55->enter($__internal_c29c4ea073c569a2101b15f8f8cf928722864251ff2ca69a7c51d43b83aa7f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c29c4ea073c569a2101b15f8f8cf928722864251ff2ca69a7c51d43b83aa7f55->leave($__internal_c29c4ea073c569a2101b15f8f8cf928722864251ff2ca69a7c51d43b83aa7f55_prof);

        
        $__internal_72920b4f9e2286d0d1a54cd62973ecc443df95804914bf6da68e06f06f8eafaf->leave($__internal_72920b4f9e2286d0d1a54cd62973ecc443df95804914bf6da68e06f06f8eafaf_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2420f0f11570c3ec3e384d00ebc44a6c15ed0d0f54d90b6db5e595651ed9fc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2420f0f11570c3ec3e384d00ebc44a6c15ed0d0f54d90b6db5e595651ed9fc2f->enter($__internal_2420f0f11570c3ec3e384d00ebc44a6c15ed0d0f54d90b6db5e595651ed9fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ddfd40b6e1f674a0902c03cccf7e0aac13da88b7916cc049d94ea9bb7c738faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfd40b6e1f674a0902c03cccf7e0aac13da88b7916cc049d94ea9bb7c738faf->enter($__internal_ddfd40b6e1f674a0902c03cccf7e0aac13da88b7916cc049d94ea9bb7c738faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ddfd40b6e1f674a0902c03cccf7e0aac13da88b7916cc049d94ea9bb7c738faf->leave($__internal_ddfd40b6e1f674a0902c03cccf7e0aac13da88b7916cc049d94ea9bb7c738faf_prof);

        
        $__internal_2420f0f11570c3ec3e384d00ebc44a6c15ed0d0f54d90b6db5e595651ed9fc2f->leave($__internal_2420f0f11570c3ec3e384d00ebc44a6c15ed0d0f54d90b6db5e595651ed9fc2f_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a56583e665d5afef2e821bc348f30a605a35e9a25ac1fa444f4d79790f92b0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56583e665d5afef2e821bc348f30a605a35e9a25ac1fa444f4d79790f92b0bd->enter($__internal_a56583e665d5afef2e821bc348f30a605a35e9a25ac1fa444f4d79790f92b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_78165494498da228b9ecfafd2bdbdad0840e5632b4c544f393e7b086ea5b9cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78165494498da228b9ecfafd2bdbdad0840e5632b4c544f393e7b086ea5b9cbc->enter($__internal_78165494498da228b9ecfafd2bdbdad0840e5632b4c544f393e7b086ea5b9cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_78165494498da228b9ecfafd2bdbdad0840e5632b4c544f393e7b086ea5b9cbc->leave($__internal_78165494498da228b9ecfafd2bdbdad0840e5632b4c544f393e7b086ea5b9cbc_prof);

        
        $__internal_a56583e665d5afef2e821bc348f30a605a35e9a25ac1fa444f4d79790f92b0bd->leave($__internal_a56583e665d5afef2e821bc348f30a605a35e9a25ac1fa444f4d79790f92b0bd_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c2fef66479409cf726eeade4c49312c8aa366110bef1c57c1766f90493a56082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2fef66479409cf726eeade4c49312c8aa366110bef1c57c1766f90493a56082->enter($__internal_c2fef66479409cf726eeade4c49312c8aa366110bef1c57c1766f90493a56082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d79d210d39e809a2700f9b59e775abeb61be1a89c2634aaf660321d12973635b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79d210d39e809a2700f9b59e775abeb61be1a89c2634aaf660321d12973635b->enter($__internal_d79d210d39e809a2700f9b59e775abeb61be1a89c2634aaf660321d12973635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d79d210d39e809a2700f9b59e775abeb61be1a89c2634aaf660321d12973635b->leave($__internal_d79d210d39e809a2700f9b59e775abeb61be1a89c2634aaf660321d12973635b_prof);

        
        $__internal_c2fef66479409cf726eeade4c49312c8aa366110bef1c57c1766f90493a56082->leave($__internal_c2fef66479409cf726eeade4c49312c8aa366110bef1c57c1766f90493a56082_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_18b278ca35fbe9e4639aa62019eac16675054207dac9f0e3a4a25b0760574e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b278ca35fbe9e4639aa62019eac16675054207dac9f0e3a4a25b0760574e7c->enter($__internal_18b278ca35fbe9e4639aa62019eac16675054207dac9f0e3a4a25b0760574e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2fd805ee32d6a27754ba394b93a2656dce9f202c85c818c45a5b0ead638e5766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd805ee32d6a27754ba394b93a2656dce9f202c85c818c45a5b0ead638e5766->enter($__internal_2fd805ee32d6a27754ba394b93a2656dce9f202c85c818c45a5b0ead638e5766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_2fd805ee32d6a27754ba394b93a2656dce9f202c85c818c45a5b0ead638e5766->leave($__internal_2fd805ee32d6a27754ba394b93a2656dce9f202c85c818c45a5b0ead638e5766_prof);

        
        $__internal_18b278ca35fbe9e4639aa62019eac16675054207dac9f0e3a4a25b0760574e7c->leave($__internal_18b278ca35fbe9e4639aa62019eac16675054207dac9f0e3a4a25b0760574e7c_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_34797319025ffc204f808434f534fe2e5eca0c0149864876e93c44a450f09dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34797319025ffc204f808434f534fe2e5eca0c0149864876e93c44a450f09dac->enter($__internal_34797319025ffc204f808434f534fe2e5eca0c0149864876e93c44a450f09dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_08f3f6aa3496969b57cb146ac831ba696a907b715c55a8fb7158e511c336186c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f3f6aa3496969b57cb146ac831ba696a907b715c55a8fb7158e511c336186c->enter($__internal_08f3f6aa3496969b57cb146ac831ba696a907b715c55a8fb7158e511c336186c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_08f3f6aa3496969b57cb146ac831ba696a907b715c55a8fb7158e511c336186c->leave($__internal_08f3f6aa3496969b57cb146ac831ba696a907b715c55a8fb7158e511c336186c_prof);

        
        $__internal_34797319025ffc204f808434f534fe2e5eca0c0149864876e93c44a450f09dac->leave($__internal_34797319025ffc204f808434f534fe2e5eca0c0149864876e93c44a450f09dac_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c6448d63e99c7537bcc79052d82f8e5328e6cb2789bae85851e76420e2993aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6448d63e99c7537bcc79052d82f8e5328e6cb2789bae85851e76420e2993aba->enter($__internal_c6448d63e99c7537bcc79052d82f8e5328e6cb2789bae85851e76420e2993aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_78eefb08fe83cc45c94b4166cb3e4e9e16f92721e86d715657d2e3094ac7da80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78eefb08fe83cc45c94b4166cb3e4e9e16f92721e86d715657d2e3094ac7da80->enter($__internal_78eefb08fe83cc45c94b4166cb3e4e9e16f92721e86d715657d2e3094ac7da80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_78eefb08fe83cc45c94b4166cb3e4e9e16f92721e86d715657d2e3094ac7da80->leave($__internal_78eefb08fe83cc45c94b4166cb3e4e9e16f92721e86d715657d2e3094ac7da80_prof);

        
        $__internal_c6448d63e99c7537bcc79052d82f8e5328e6cb2789bae85851e76420e2993aba->leave($__internal_c6448d63e99c7537bcc79052d82f8e5328e6cb2789bae85851e76420e2993aba_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_692c6e1856a60fee69b28090f88de91be16d9e384e09246db70d4326ed6d3b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692c6e1856a60fee69b28090f88de91be16d9e384e09246db70d4326ed6d3b2e->enter($__internal_692c6e1856a60fee69b28090f88de91be16d9e384e09246db70d4326ed6d3b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ecfa72f2deea4f449e4b4c659f42fe09610b0006519239db2d6ab0db17254b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfa72f2deea4f449e4b4c659f42fe09610b0006519239db2d6ab0db17254b30->enter($__internal_ecfa72f2deea4f449e4b4c659f42fe09610b0006519239db2d6ab0db17254b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ecfa72f2deea4f449e4b4c659f42fe09610b0006519239db2d6ab0db17254b30->leave($__internal_ecfa72f2deea4f449e4b4c659f42fe09610b0006519239db2d6ab0db17254b30_prof);

        
        $__internal_692c6e1856a60fee69b28090f88de91be16d9e384e09246db70d4326ed6d3b2e->leave($__internal_692c6e1856a60fee69b28090f88de91be16d9e384e09246db70d4326ed6d3b2e_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8d5b53b8e692b6dd0dec709f9a103f6e7d4bf66f35c7a37da939bb7b25a23e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5b53b8e692b6dd0dec709f9a103f6e7d4bf66f35c7a37da939bb7b25a23e1d->enter($__internal_8d5b53b8e692b6dd0dec709f9a103f6e7d4bf66f35c7a37da939bb7b25a23e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c1d9ec0cde72c5ccaf55fa845407794544a28a6f6eacc64863c59d6c4dd9ee0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d9ec0cde72c5ccaf55fa845407794544a28a6f6eacc64863c59d6c4dd9ee0f->enter($__internal_c1d9ec0cde72c5ccaf55fa845407794544a28a6f6eacc64863c59d6c4dd9ee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c1d9ec0cde72c5ccaf55fa845407794544a28a6f6eacc64863c59d6c4dd9ee0f->leave($__internal_c1d9ec0cde72c5ccaf55fa845407794544a28a6f6eacc64863c59d6c4dd9ee0f_prof);

        
        $__internal_8d5b53b8e692b6dd0dec709f9a103f6e7d4bf66f35c7a37da939bb7b25a23e1d->leave($__internal_8d5b53b8e692b6dd0dec709f9a103f6e7d4bf66f35c7a37da939bb7b25a23e1d_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_dc8e2d292dad54ef072a2244e6c61d519bba3d8924fafcd16478467ec3c00eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8e2d292dad54ef072a2244e6c61d519bba3d8924fafcd16478467ec3c00eed->enter($__internal_dc8e2d292dad54ef072a2244e6c61d519bba3d8924fafcd16478467ec3c00eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3c054f6f8ff543bfa92ef844a8dca0a61dc4730e3a27f85a282b49a54fbc96d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c054f6f8ff543bfa92ef844a8dca0a61dc4730e3a27f85a282b49a54fbc96d7->enter($__internal_3c054f6f8ff543bfa92ef844a8dca0a61dc4730e3a27f85a282b49a54fbc96d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3c054f6f8ff543bfa92ef844a8dca0a61dc4730e3a27f85a282b49a54fbc96d7->leave($__internal_3c054f6f8ff543bfa92ef844a8dca0a61dc4730e3a27f85a282b49a54fbc96d7_prof);

        
        $__internal_dc8e2d292dad54ef072a2244e6c61d519bba3d8924fafcd16478467ec3c00eed->leave($__internal_dc8e2d292dad54ef072a2244e6c61d519bba3d8924fafcd16478467ec3c00eed_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2606f35ac51a06c7e15b7b8c7fa06e3059b17350879eba9c9083008d2230b87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2606f35ac51a06c7e15b7b8c7fa06e3059b17350879eba9c9083008d2230b87e->enter($__internal_2606f35ac51a06c7e15b7b8c7fa06e3059b17350879eba9c9083008d2230b87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5f8fec76d4475e819afeed0badbfbd91fc66b6dc592259448719aa178ea4a5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8fec76d4475e819afeed0badbfbd91fc66b6dc592259448719aa178ea4a5d7->enter($__internal_5f8fec76d4475e819afeed0badbfbd91fc66b6dc592259448719aa178ea4a5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5f8fec76d4475e819afeed0badbfbd91fc66b6dc592259448719aa178ea4a5d7->leave($__internal_5f8fec76d4475e819afeed0badbfbd91fc66b6dc592259448719aa178ea4a5d7_prof);

        
        $__internal_2606f35ac51a06c7e15b7b8c7fa06e3059b17350879eba9c9083008d2230b87e->leave($__internal_2606f35ac51a06c7e15b7b8c7fa06e3059b17350879eba9c9083008d2230b87e_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b4a0d0b231824328e450bb2147783a673dd75b4b20a6dfb1ce6c1338e5eb6896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a0d0b231824328e450bb2147783a673dd75b4b20a6dfb1ce6c1338e5eb6896->enter($__internal_b4a0d0b231824328e450bb2147783a673dd75b4b20a6dfb1ce6c1338e5eb6896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ca63d7fa04cb6973a3ccf9d5a495ff7b812f06803299d5bae387dedb727099dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca63d7fa04cb6973a3ccf9d5a495ff7b812f06803299d5bae387dedb727099dd->enter($__internal_ca63d7fa04cb6973a3ccf9d5a495ff7b812f06803299d5bae387dedb727099dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ca63d7fa04cb6973a3ccf9d5a495ff7b812f06803299d5bae387dedb727099dd->leave($__internal_ca63d7fa04cb6973a3ccf9d5a495ff7b812f06803299d5bae387dedb727099dd_prof);

        
        $__internal_b4a0d0b231824328e450bb2147783a673dd75b4b20a6dfb1ce6c1338e5eb6896->leave($__internal_b4a0d0b231824328e450bb2147783a673dd75b4b20a6dfb1ce6c1338e5eb6896_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_785bf48f4cd3bdff41bdf212817c1a4ed7db46b679cf8db7f858e347a4e0c445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785bf48f4cd3bdff41bdf212817c1a4ed7db46b679cf8db7f858e347a4e0c445->enter($__internal_785bf48f4cd3bdff41bdf212817c1a4ed7db46b679cf8db7f858e347a4e0c445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0d0412f0a8833c384c903584e48ac5b836a6c5ffc898c98cffa7200fd9288c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0412f0a8833c384c903584e48ac5b836a6c5ffc898c98cffa7200fd9288c05->enter($__internal_0d0412f0a8833c384c903584e48ac5b836a6c5ffc898c98cffa7200fd9288c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_0d0412f0a8833c384c903584e48ac5b836a6c5ffc898c98cffa7200fd9288c05->leave($__internal_0d0412f0a8833c384c903584e48ac5b836a6c5ffc898c98cffa7200fd9288c05_prof);

        
        $__internal_785bf48f4cd3bdff41bdf212817c1a4ed7db46b679cf8db7f858e347a4e0c445->leave($__internal_785bf48f4cd3bdff41bdf212817c1a4ed7db46b679cf8db7f858e347a4e0c445_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_43100e9ceb3bf7a7dfac4ff8c437897f69be1f9037f7c660ed4a0d259e517209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43100e9ceb3bf7a7dfac4ff8c437897f69be1f9037f7c660ed4a0d259e517209->enter($__internal_43100e9ceb3bf7a7dfac4ff8c437897f69be1f9037f7c660ed4a0d259e517209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_356e46c3df950bdcd2acb1a163bc375ab8c952f12f1d5698660643ea2185a1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356e46c3df950bdcd2acb1a163bc375ab8c952f12f1d5698660643ea2185a1ff->enter($__internal_356e46c3df950bdcd2acb1a163bc375ab8c952f12f1d5698660643ea2185a1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_356e46c3df950bdcd2acb1a163bc375ab8c952f12f1d5698660643ea2185a1ff->leave($__internal_356e46c3df950bdcd2acb1a163bc375ab8c952f12f1d5698660643ea2185a1ff_prof);

        
        $__internal_43100e9ceb3bf7a7dfac4ff8c437897f69be1f9037f7c660ed4a0d259e517209->leave($__internal_43100e9ceb3bf7a7dfac4ff8c437897f69be1f9037f7c660ed4a0d259e517209_prof);

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
