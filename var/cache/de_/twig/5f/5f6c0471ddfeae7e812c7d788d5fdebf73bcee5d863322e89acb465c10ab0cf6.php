<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_36d7f78c20db9abf7a86f897ca50c68d32e882bf87365b8881c88b6ea6698f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a58bd6013fbd175fde84280d442e6cad5b19763d4aad89d55ee9ccb350f8d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a58bd6013fbd175fde84280d442e6cad5b19763d4aad89d55ee9ccb350f8d1e->enter($__internal_8a58bd6013fbd175fde84280d442e6cad5b19763d4aad89d55ee9ccb350f8d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_4aab1e746b42f6e0eafe4b3728820597193b6f7c3f406e489a54abff8aa00c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aab1e746b42f6e0eafe4b3728820597193b6f7c3f406e489a54abff8aa00c9d->enter($__internal_4aab1e746b42f6e0eafe4b3728820597193b6f7c3f406e489a54abff8aa00c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_8a58bd6013fbd175fde84280d442e6cad5b19763d4aad89d55ee9ccb350f8d1e->leave($__internal_8a58bd6013fbd175fde84280d442e6cad5b19763d4aad89d55ee9ccb350f8d1e_prof);

        
        $__internal_4aab1e746b42f6e0eafe4b3728820597193b6f7c3f406e489a54abff8aa00c9d->leave($__internal_4aab1e746b42f6e0eafe4b3728820597193b6f7c3f406e489a54abff8aa00c9d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_719ac6c5a1daae369062930745e8a48bde9b23509c8eb70ba01a00b879c18a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719ac6c5a1daae369062930745e8a48bde9b23509c8eb70ba01a00b879c18a3a->enter($__internal_719ac6c5a1daae369062930745e8a48bde9b23509c8eb70ba01a00b879c18a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6d387a78f867da8fc6e79afbbffc081a6107d9e4e42fe7a2cfe43ad74ad62b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d387a78f867da8fc6e79afbbffc081a6107d9e4e42fe7a2cfe43ad74ad62b27->enter($__internal_6d387a78f867da8fc6e79afbbffc081a6107d9e4e42fe7a2cfe43ad74ad62b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_6d387a78f867da8fc6e79afbbffc081a6107d9e4e42fe7a2cfe43ad74ad62b27->leave($__internal_6d387a78f867da8fc6e79afbbffc081a6107d9e4e42fe7a2cfe43ad74ad62b27_prof);

        
        $__internal_719ac6c5a1daae369062930745e8a48bde9b23509c8eb70ba01a00b879c18a3a->leave($__internal_719ac6c5a1daae369062930745e8a48bde9b23509c8eb70ba01a00b879c18a3a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4391e294bef9c1950562023b2744d82f5f3d9e35ab4272bbcaeee830ccefe151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4391e294bef9c1950562023b2744d82f5f3d9e35ab4272bbcaeee830ccefe151->enter($__internal_4391e294bef9c1950562023b2744d82f5f3d9e35ab4272bbcaeee830ccefe151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_091c43ed86b5165b6e9156bafdb7805faa175511445a6de77277333ed8e754c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091c43ed86b5165b6e9156bafdb7805faa175511445a6de77277333ed8e754c2->enter($__internal_091c43ed86b5165b6e9156bafdb7805faa175511445a6de77277333ed8e754c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_091c43ed86b5165b6e9156bafdb7805faa175511445a6de77277333ed8e754c2->leave($__internal_091c43ed86b5165b6e9156bafdb7805faa175511445a6de77277333ed8e754c2_prof);

        
        $__internal_4391e294bef9c1950562023b2744d82f5f3d9e35ab4272bbcaeee830ccefe151->leave($__internal_4391e294bef9c1950562023b2744d82f5f3d9e35ab4272bbcaeee830ccefe151_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5e093dbf27d83563023441a680622f0964eed736c2eebf2bf71366f0f6517148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e093dbf27d83563023441a680622f0964eed736c2eebf2bf71366f0f6517148->enter($__internal_5e093dbf27d83563023441a680622f0964eed736c2eebf2bf71366f0f6517148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1fd1f8d6555c98db0b57490f861a4fe6fa63a095c082fbafeba73cbc83cc23fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd1f8d6555c98db0b57490f861a4fe6fa63a095c082fbafeba73cbc83cc23fc->enter($__internal_1fd1f8d6555c98db0b57490f861a4fe6fa63a095c082fbafeba73cbc83cc23fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_1fd1f8d6555c98db0b57490f861a4fe6fa63a095c082fbafeba73cbc83cc23fc->leave($__internal_1fd1f8d6555c98db0b57490f861a4fe6fa63a095c082fbafeba73cbc83cc23fc_prof);

        
        $__internal_5e093dbf27d83563023441a680622f0964eed736c2eebf2bf71366f0f6517148->leave($__internal_5e093dbf27d83563023441a680622f0964eed736c2eebf2bf71366f0f6517148_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_868812589ffeeef2687a2128faec32ea5798588c5b6c6272436701ecb43f7ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868812589ffeeef2687a2128faec32ea5798588c5b6c6272436701ecb43f7ebf->enter($__internal_868812589ffeeef2687a2128faec32ea5798588c5b6c6272436701ecb43f7ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b4fd87a250c1b31fad725f305282dbdac16d9de6c63f4081d385e5bcc8ae2e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fd87a250c1b31fad725f305282dbdac16d9de6c63f4081d385e5bcc8ae2e9c->enter($__internal_b4fd87a250c1b31fad725f305282dbdac16d9de6c63f4081d385e5bcc8ae2e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_b4fd87a250c1b31fad725f305282dbdac16d9de6c63f4081d385e5bcc8ae2e9c->leave($__internal_b4fd87a250c1b31fad725f305282dbdac16d9de6c63f4081d385e5bcc8ae2e9c_prof);

        
        $__internal_868812589ffeeef2687a2128faec32ea5798588c5b6c6272436701ecb43f7ebf->leave($__internal_868812589ffeeef2687a2128faec32ea5798588c5b6c6272436701ecb43f7ebf_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_086c484b252793224372822eb6f747437029c8d8be7017a0654c3dac765055a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086c484b252793224372822eb6f747437029c8d8be7017a0654c3dac765055a7->enter($__internal_086c484b252793224372822eb6f747437029c8d8be7017a0654c3dac765055a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e98e0a2061496f2884839b956a4c7f18c4dccbaaddceafb5988a483206452879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98e0a2061496f2884839b956a4c7f18c4dccbaaddceafb5988a483206452879->enter($__internal_e98e0a2061496f2884839b956a4c7f18c4dccbaaddceafb5988a483206452879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e98e0a2061496f2884839b956a4c7f18c4dccbaaddceafb5988a483206452879->leave($__internal_e98e0a2061496f2884839b956a4c7f18c4dccbaaddceafb5988a483206452879_prof);

        
        $__internal_086c484b252793224372822eb6f747437029c8d8be7017a0654c3dac765055a7->leave($__internal_086c484b252793224372822eb6f747437029c8d8be7017a0654c3dac765055a7_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_945aea5dd3570da4be686b5d348da1bb90561aa66b32c6bfa7276748de50462d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945aea5dd3570da4be686b5d348da1bb90561aa66b32c6bfa7276748de50462d->enter($__internal_945aea5dd3570da4be686b5d348da1bb90561aa66b32c6bfa7276748de50462d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_265a020ef84ac204755596141e0f2ce59de4147c06e451204bfd2a7f7839fd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265a020ef84ac204755596141e0f2ce59de4147c06e451204bfd2a7f7839fd4e->enter($__internal_265a020ef84ac204755596141e0f2ce59de4147c06e451204bfd2a7f7839fd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_265a020ef84ac204755596141e0f2ce59de4147c06e451204bfd2a7f7839fd4e->leave($__internal_265a020ef84ac204755596141e0f2ce59de4147c06e451204bfd2a7f7839fd4e_prof);

        
        $__internal_945aea5dd3570da4be686b5d348da1bb90561aa66b32c6bfa7276748de50462d->leave($__internal_945aea5dd3570da4be686b5d348da1bb90561aa66b32c6bfa7276748de50462d_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ae405bc318749a8aa9edf3fa72b0421279f76590e2959915ca278517d8afeac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae405bc318749a8aa9edf3fa72b0421279f76590e2959915ca278517d8afeac1->enter($__internal_ae405bc318749a8aa9edf3fa72b0421279f76590e2959915ca278517d8afeac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_91f02770b83bb1617a86e744a17113211ef0958b1f9e61422825c4980530c839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f02770b83bb1617a86e744a17113211ef0958b1f9e61422825c4980530c839->enter($__internal_91f02770b83bb1617a86e744a17113211ef0958b1f9e61422825c4980530c839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_91f02770b83bb1617a86e744a17113211ef0958b1f9e61422825c4980530c839->leave($__internal_91f02770b83bb1617a86e744a17113211ef0958b1f9e61422825c4980530c839_prof);

        
        $__internal_ae405bc318749a8aa9edf3fa72b0421279f76590e2959915ca278517d8afeac1->leave($__internal_ae405bc318749a8aa9edf3fa72b0421279f76590e2959915ca278517d8afeac1_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_88061530b4630c2b892a63a7f2e0f32bcb900b40899e84f0f651d796909e0dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88061530b4630c2b892a63a7f2e0f32bcb900b40899e84f0f651d796909e0dd8->enter($__internal_88061530b4630c2b892a63a7f2e0f32bcb900b40899e84f0f651d796909e0dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bd6d31ed861d5b91f3de8180dd1bc647b6feb653094e528b5a70ec32dbcc1555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6d31ed861d5b91f3de8180dd1bc647b6feb653094e528b5a70ec32dbcc1555->enter($__internal_bd6d31ed861d5b91f3de8180dd1bc647b6feb653094e528b5a70ec32dbcc1555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd6d31ed861d5b91f3de8180dd1bc647b6feb653094e528b5a70ec32dbcc1555->leave($__internal_bd6d31ed861d5b91f3de8180dd1bc647b6feb653094e528b5a70ec32dbcc1555_prof);

        
        $__internal_88061530b4630c2b892a63a7f2e0f32bcb900b40899e84f0f651d796909e0dd8->leave($__internal_88061530b4630c2b892a63a7f2e0f32bcb900b40899e84f0f651d796909e0dd8_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e6cb57780e9c3e93130be31162e63e17da73e57d8bd87f4e752c713419267ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cb57780e9c3e93130be31162e63e17da73e57d8bd87f4e752c713419267ec6->enter($__internal_e6cb57780e9c3e93130be31162e63e17da73e57d8bd87f4e752c713419267ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_cd9e8a00e96942935749a3014a503e6959f85d7cf5b77bbd3e69f840b3fd12b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9e8a00e96942935749a3014a503e6959f85d7cf5b77bbd3e69f840b3fd12b7->enter($__internal_cd9e8a00e96942935749a3014a503e6959f85d7cf5b77bbd3e69f840b3fd12b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cd9e8a00e96942935749a3014a503e6959f85d7cf5b77bbd3e69f840b3fd12b7->leave($__internal_cd9e8a00e96942935749a3014a503e6959f85d7cf5b77bbd3e69f840b3fd12b7_prof);

        
        $__internal_e6cb57780e9c3e93130be31162e63e17da73e57d8bd87f4e752c713419267ec6->leave($__internal_e6cb57780e9c3e93130be31162e63e17da73e57d8bd87f4e752c713419267ec6_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_eadc43b2b07e85d7d2127209cc35dde94a2311b79474f27e5e7360e94af7c9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadc43b2b07e85d7d2127209cc35dde94a2311b79474f27e5e7360e94af7c9b7->enter($__internal_eadc43b2b07e85d7d2127209cc35dde94a2311b79474f27e5e7360e94af7c9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_e0a4fbfdc01b4197c3c9330f32812af33d14a7ea08608a82a26a4830f4c1aa75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a4fbfdc01b4197c3c9330f32812af33d14a7ea08608a82a26a4830f4c1aa75->enter($__internal_e0a4fbfdc01b4197c3c9330f32812af33d14a7ea08608a82a26a4830f4c1aa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_e0a4fbfdc01b4197c3c9330f32812af33d14a7ea08608a82a26a4830f4c1aa75->leave($__internal_e0a4fbfdc01b4197c3c9330f32812af33d14a7ea08608a82a26a4830f4c1aa75_prof);

        
        $__internal_eadc43b2b07e85d7d2127209cc35dde94a2311b79474f27e5e7360e94af7c9b7->leave($__internal_eadc43b2b07e85d7d2127209cc35dde94a2311b79474f27e5e7360e94af7c9b7_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
