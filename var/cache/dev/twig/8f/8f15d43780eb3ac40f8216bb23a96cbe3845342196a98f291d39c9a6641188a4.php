<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_d08f7625f9fab3e0239bd77c245bc20595c815dff239207b056e1004996d2d7b extends Twig_Template
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
        $__internal_1a915247d869d9f228f9c9287a9fa366c17acc414842607ef0eaa8e486897b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a915247d869d9f228f9c9287a9fa366c17acc414842607ef0eaa8e486897b38->enter($__internal_1a915247d869d9f228f9c9287a9fa366c17acc414842607ef0eaa8e486897b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_287cd1aec1d1de2bbc0814715c5b4e0c2eca03d62d1fff290b7d551c5fbaf865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287cd1aec1d1de2bbc0814715c5b4e0c2eca03d62d1fff290b7d551c5fbaf865->enter($__internal_287cd1aec1d1de2bbc0814715c5b4e0c2eca03d62d1fff290b7d551c5fbaf865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_1a915247d869d9f228f9c9287a9fa366c17acc414842607ef0eaa8e486897b38->leave($__internal_1a915247d869d9f228f9c9287a9fa366c17acc414842607ef0eaa8e486897b38_prof);

        
        $__internal_287cd1aec1d1de2bbc0814715c5b4e0c2eca03d62d1fff290b7d551c5fbaf865->leave($__internal_287cd1aec1d1de2bbc0814715c5b4e0c2eca03d62d1fff290b7d551c5fbaf865_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7ab1d1e8f2d12d5a9af10ac0c7828831fdeb2401110779d22a849a3a6387f455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab1d1e8f2d12d5a9af10ac0c7828831fdeb2401110779d22a849a3a6387f455->enter($__internal_7ab1d1e8f2d12d5a9af10ac0c7828831fdeb2401110779d22a849a3a6387f455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_544740e3a9f988928b5c1a52f53eabea8bd443ffafb88ea4d5d1bab61d884b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544740e3a9f988928b5c1a52f53eabea8bd443ffafb88ea4d5d1bab61d884b6c->enter($__internal_544740e3a9f988928b5c1a52f53eabea8bd443ffafb88ea4d5d1bab61d884b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_544740e3a9f988928b5c1a52f53eabea8bd443ffafb88ea4d5d1bab61d884b6c->leave($__internal_544740e3a9f988928b5c1a52f53eabea8bd443ffafb88ea4d5d1bab61d884b6c_prof);

        
        $__internal_7ab1d1e8f2d12d5a9af10ac0c7828831fdeb2401110779d22a849a3a6387f455->leave($__internal_7ab1d1e8f2d12d5a9af10ac0c7828831fdeb2401110779d22a849a3a6387f455_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_759f7c4fe56a52a68dfb1312ee0fd4365be8238264961480851619bd7e3e321b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_759f7c4fe56a52a68dfb1312ee0fd4365be8238264961480851619bd7e3e321b->enter($__internal_759f7c4fe56a52a68dfb1312ee0fd4365be8238264961480851619bd7e3e321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9dfaad2d79be2f4d1e302f6c955d082e3fedd3ad79f3491c7156948566b89170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfaad2d79be2f4d1e302f6c955d082e3fedd3ad79f3491c7156948566b89170->enter($__internal_9dfaad2d79be2f4d1e302f6c955d082e3fedd3ad79f3491c7156948566b89170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_9dfaad2d79be2f4d1e302f6c955d082e3fedd3ad79f3491c7156948566b89170->leave($__internal_9dfaad2d79be2f4d1e302f6c955d082e3fedd3ad79f3491c7156948566b89170_prof);

        
        $__internal_759f7c4fe56a52a68dfb1312ee0fd4365be8238264961480851619bd7e3e321b->leave($__internal_759f7c4fe56a52a68dfb1312ee0fd4365be8238264961480851619bd7e3e321b_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_e4ef05c731efadb83e8d2a9fd956fd71cf7062e81c69b758216f2496fdb5ae67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ef05c731efadb83e8d2a9fd956fd71cf7062e81c69b758216f2496fdb5ae67->enter($__internal_e4ef05c731efadb83e8d2a9fd956fd71cf7062e81c69b758216f2496fdb5ae67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_25b772949237368c4887d8f9c0f3ad6c7c38c25febf0f4052dfd4905c06731c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b772949237368c4887d8f9c0f3ad6c7c38c25febf0f4052dfd4905c06731c9->enter($__internal_25b772949237368c4887d8f9c0f3ad6c7c38c25febf0f4052dfd4905c06731c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_25b772949237368c4887d8f9c0f3ad6c7c38c25febf0f4052dfd4905c06731c9->leave($__internal_25b772949237368c4887d8f9c0f3ad6c7c38c25febf0f4052dfd4905c06731c9_prof);

        
        $__internal_e4ef05c731efadb83e8d2a9fd956fd71cf7062e81c69b758216f2496fdb5ae67->leave($__internal_e4ef05c731efadb83e8d2a9fd956fd71cf7062e81c69b758216f2496fdb5ae67_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_497b505c21992c0594dabf4f8909b1f29960b9246c555d4e3f579a0528d26a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497b505c21992c0594dabf4f8909b1f29960b9246c555d4e3f579a0528d26a92->enter($__internal_497b505c21992c0594dabf4f8909b1f29960b9246c555d4e3f579a0528d26a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9d42741b0231d41c497631ad602f6e95639e4cb62a618b781ac9542ffa2ab196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d42741b0231d41c497631ad602f6e95639e4cb62a618b781ac9542ffa2ab196->enter($__internal_9d42741b0231d41c497631ad602f6e95639e4cb62a618b781ac9542ffa2ab196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9d42741b0231d41c497631ad602f6e95639e4cb62a618b781ac9542ffa2ab196->leave($__internal_9d42741b0231d41c497631ad602f6e95639e4cb62a618b781ac9542ffa2ab196_prof);

        
        $__internal_497b505c21992c0594dabf4f8909b1f29960b9246c555d4e3f579a0528d26a92->leave($__internal_497b505c21992c0594dabf4f8909b1f29960b9246c555d4e3f579a0528d26a92_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_26f4bba3a8d4b95e3b7d72326abd551518b3d44b7ae343fb53cdb302bf23acea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f4bba3a8d4b95e3b7d72326abd551518b3d44b7ae343fb53cdb302bf23acea->enter($__internal_26f4bba3a8d4b95e3b7d72326abd551518b3d44b7ae343fb53cdb302bf23acea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e9d829445e52f61af379b4477e784ad3a7bf317edb0848bc94fce52001b0d586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d829445e52f61af379b4477e784ad3a7bf317edb0848bc94fce52001b0d586->enter($__internal_e9d829445e52f61af379b4477e784ad3a7bf317edb0848bc94fce52001b0d586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e9d829445e52f61af379b4477e784ad3a7bf317edb0848bc94fce52001b0d586->leave($__internal_e9d829445e52f61af379b4477e784ad3a7bf317edb0848bc94fce52001b0d586_prof);

        
        $__internal_26f4bba3a8d4b95e3b7d72326abd551518b3d44b7ae343fb53cdb302bf23acea->leave($__internal_26f4bba3a8d4b95e3b7d72326abd551518b3d44b7ae343fb53cdb302bf23acea_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2df07b182c304a7616f1910dbec5ddb1a2ebd35e57aab8b92be2016afcc19a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df07b182c304a7616f1910dbec5ddb1a2ebd35e57aab8b92be2016afcc19a9a->enter($__internal_2df07b182c304a7616f1910dbec5ddb1a2ebd35e57aab8b92be2016afcc19a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9bd72ed6d1a8695c7336baac474ccf84ae0663046caf4d8268be8606d2678f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd72ed6d1a8695c7336baac474ccf84ae0663046caf4d8268be8606d2678f10->enter($__internal_9bd72ed6d1a8695c7336baac474ccf84ae0663046caf4d8268be8606d2678f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9bd72ed6d1a8695c7336baac474ccf84ae0663046caf4d8268be8606d2678f10->leave($__internal_9bd72ed6d1a8695c7336baac474ccf84ae0663046caf4d8268be8606d2678f10_prof);

        
        $__internal_2df07b182c304a7616f1910dbec5ddb1a2ebd35e57aab8b92be2016afcc19a9a->leave($__internal_2df07b182c304a7616f1910dbec5ddb1a2ebd35e57aab8b92be2016afcc19a9a_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a53987e9050bdb9a07721defec4719d9554b5416d46e6cb089ded6ec6aaabc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53987e9050bdb9a07721defec4719d9554b5416d46e6cb089ded6ec6aaabc62->enter($__internal_a53987e9050bdb9a07721defec4719d9554b5416d46e6cb089ded6ec6aaabc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_442e80f03f19d8d71fed76a4783b4133b02b08e6e97c00c0eb3cf7eaf809d8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442e80f03f19d8d71fed76a4783b4133b02b08e6e97c00c0eb3cf7eaf809d8b0->enter($__internal_442e80f03f19d8d71fed76a4783b4133b02b08e6e97c00c0eb3cf7eaf809d8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_442e80f03f19d8d71fed76a4783b4133b02b08e6e97c00c0eb3cf7eaf809d8b0->leave($__internal_442e80f03f19d8d71fed76a4783b4133b02b08e6e97c00c0eb3cf7eaf809d8b0_prof);

        
        $__internal_a53987e9050bdb9a07721defec4719d9554b5416d46e6cb089ded6ec6aaabc62->leave($__internal_a53987e9050bdb9a07721defec4719d9554b5416d46e6cb089ded6ec6aaabc62_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_8de02ed578e5432420c2dd29d9c7c008cb610facbc9b5a9a961878f26ba00ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de02ed578e5432420c2dd29d9c7c008cb610facbc9b5a9a961878f26ba00ea1->enter($__internal_8de02ed578e5432420c2dd29d9c7c008cb610facbc9b5a9a961878f26ba00ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7f4954fcf33b9b2b552857041ca0f490ffa7da72ee09efa7480d8ca268d7aad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4954fcf33b9b2b552857041ca0f490ffa7da72ee09efa7480d8ca268d7aad5->enter($__internal_7f4954fcf33b9b2b552857041ca0f490ffa7da72ee09efa7480d8ca268d7aad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_7f4954fcf33b9b2b552857041ca0f490ffa7da72ee09efa7480d8ca268d7aad5->leave($__internal_7f4954fcf33b9b2b552857041ca0f490ffa7da72ee09efa7480d8ca268d7aad5_prof);

        
        $__internal_8de02ed578e5432420c2dd29d9c7c008cb610facbc9b5a9a961878f26ba00ea1->leave($__internal_8de02ed578e5432420c2dd29d9c7c008cb610facbc9b5a9a961878f26ba00ea1_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_53e7160dd445e50ca7f20043ba18500c6c3022e3042793d88a8c2b4df321efc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e7160dd445e50ca7f20043ba18500c6c3022e3042793d88a8c2b4df321efc5->enter($__internal_53e7160dd445e50ca7f20043ba18500c6c3022e3042793d88a8c2b4df321efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_85dd755781edb9cb372ed00210f03ec1a6fed116281231f27ed908d8e55d05d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dd755781edb9cb372ed00210f03ec1a6fed116281231f27ed908d8e55d05d2->enter($__internal_85dd755781edb9cb372ed00210f03ec1a6fed116281231f27ed908d8e55d05d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_85dd755781edb9cb372ed00210f03ec1a6fed116281231f27ed908d8e55d05d2->leave($__internal_85dd755781edb9cb372ed00210f03ec1a6fed116281231f27ed908d8e55d05d2_prof);

        
        $__internal_53e7160dd445e50ca7f20043ba18500c6c3022e3042793d88a8c2b4df321efc5->leave($__internal_53e7160dd445e50ca7f20043ba18500c6c3022e3042793d88a8c2b4df321efc5_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c871df4a95beecf0f47124bb843a13ac55efb4d281a341005ef3226fd28c0b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c871df4a95beecf0f47124bb843a13ac55efb4d281a341005ef3226fd28c0b33->enter($__internal_c871df4a95beecf0f47124bb843a13ac55efb4d281a341005ef3226fd28c0b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1181bd94086e868db16231ac30ceb5426044ca1ff2c943f0f24115dd733b12ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1181bd94086e868db16231ac30ceb5426044ca1ff2c943f0f24115dd733b12ff->enter($__internal_1181bd94086e868db16231ac30ceb5426044ca1ff2c943f0f24115dd733b12ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_1181bd94086e868db16231ac30ceb5426044ca1ff2c943f0f24115dd733b12ff->leave($__internal_1181bd94086e868db16231ac30ceb5426044ca1ff2c943f0f24115dd733b12ff_prof);

        
        $__internal_c871df4a95beecf0f47124bb843a13ac55efb4d281a341005ef3226fd28c0b33->leave($__internal_c871df4a95beecf0f47124bb843a13ac55efb4d281a341005ef3226fd28c0b33_prof);

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
", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
