<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_02d5be04ad7ae480ab6b82dc987260dc8126ca46ddc1e671ba2fdf1a24d3191d extends Twig_Template
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
        $__internal_bef5b66516195b92038082f304f098daddcbf8c8fbb8159eb6c0ce8615a925c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef5b66516195b92038082f304f098daddcbf8c8fbb8159eb6c0ce8615a925c2->enter($__internal_bef5b66516195b92038082f304f098daddcbf8c8fbb8159eb6c0ce8615a925c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1a15e919eec41e917b623d59b589fd1465cd1d60bbc11f3dae0aa7700099d4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a15e919eec41e917b623d59b589fd1465cd1d60bbc11f3dae0aa7700099d4e4->enter($__internal_1a15e919eec41e917b623d59b589fd1465cd1d60bbc11f3dae0aa7700099d4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bef5b66516195b92038082f304f098daddcbf8c8fbb8159eb6c0ce8615a925c2->leave($__internal_bef5b66516195b92038082f304f098daddcbf8c8fbb8159eb6c0ce8615a925c2_prof);

        
        $__internal_1a15e919eec41e917b623d59b589fd1465cd1d60bbc11f3dae0aa7700099d4e4->leave($__internal_1a15e919eec41e917b623d59b589fd1465cd1d60bbc11f3dae0aa7700099d4e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
