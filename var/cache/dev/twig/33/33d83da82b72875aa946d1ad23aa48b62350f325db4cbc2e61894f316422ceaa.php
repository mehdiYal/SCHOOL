<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0e5449bc332f7b8239c2b5e329dd8a96f823be6bf406649db9be429086f4bd20 extends Twig_Template
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
        $__internal_2a31eac12b51d953008282a7012cc0c17a2cd434715e1620c2613eaf6d243263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a31eac12b51d953008282a7012cc0c17a2cd434715e1620c2613eaf6d243263->enter($__internal_2a31eac12b51d953008282a7012cc0c17a2cd434715e1620c2613eaf6d243263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_10fb9ea779c5dff639c4847154c1aa74f3e16cb8450d0cb8c36b7098c6dedd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fb9ea779c5dff639c4847154c1aa74f3e16cb8450d0cb8c36b7098c6dedd11->enter($__internal_10fb9ea779c5dff639c4847154c1aa74f3e16cb8450d0cb8c36b7098c6dedd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2a31eac12b51d953008282a7012cc0c17a2cd434715e1620c2613eaf6d243263->leave($__internal_2a31eac12b51d953008282a7012cc0c17a2cd434715e1620c2613eaf6d243263_prof);

        
        $__internal_10fb9ea779c5dff639c4847154c1aa74f3e16cb8450d0cb8c36b7098c6dedd11->leave($__internal_10fb9ea779c5dff639c4847154c1aa74f3e16cb8450d0cb8c36b7098c6dedd11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
