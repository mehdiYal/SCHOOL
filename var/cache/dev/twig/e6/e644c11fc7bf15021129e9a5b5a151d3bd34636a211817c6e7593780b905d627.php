<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0db91e81d130907ebd7b0e6dc57d01c738d72f0cddbd1e4e15d1a5d5b1fa5fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01e129de6276f9edf6486de90003f0db046fb8eff86ba6ee82eb03ce580f184f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e129de6276f9edf6486de90003f0db046fb8eff86ba6ee82eb03ce580f184f->enter($__internal_01e129de6276f9edf6486de90003f0db046fb8eff86ba6ee82eb03ce580f184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a7145c42372a1b4bb43dc4990e1565787204f763e89528a29a811266731a7ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7145c42372a1b4bb43dc4990e1565787204f763e89528a29a811266731a7ff9->enter($__internal_a7145c42372a1b4bb43dc4990e1565787204f763e89528a29a811266731a7ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_01e129de6276f9edf6486de90003f0db046fb8eff86ba6ee82eb03ce580f184f->leave($__internal_01e129de6276f9edf6486de90003f0db046fb8eff86ba6ee82eb03ce580f184f_prof);

        
        $__internal_a7145c42372a1b4bb43dc4990e1565787204f763e89528a29a811266731a7ff9->leave($__internal_a7145c42372a1b4bb43dc4990e1565787204f763e89528a29a811266731a7ff9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
