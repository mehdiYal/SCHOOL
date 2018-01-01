<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_092c2c6952ec434c9e1863a73583c214048c582309b276ff92db43ce94f2f7e2 extends Twig_Template
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
        $__internal_54e04ee4685ced35caefd6c78d103eb5dc098c42e788430f935843bd3e12bb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e04ee4685ced35caefd6c78d103eb5dc098c42e788430f935843bd3e12bb3e->enter($__internal_54e04ee4685ced35caefd6c78d103eb5dc098c42e788430f935843bd3e12bb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f6dbaf35e2a670281229cd0bb4963876170a1031c4ee081b141a30e511353c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6dbaf35e2a670281229cd0bb4963876170a1031c4ee081b141a30e511353c98->enter($__internal_f6dbaf35e2a670281229cd0bb4963876170a1031c4ee081b141a30e511353c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_54e04ee4685ced35caefd6c78d103eb5dc098c42e788430f935843bd3e12bb3e->leave($__internal_54e04ee4685ced35caefd6c78d103eb5dc098c42e788430f935843bd3e12bb3e_prof);

        
        $__internal_f6dbaf35e2a670281229cd0bb4963876170a1031c4ee081b141a30e511353c98->leave($__internal_f6dbaf35e2a670281229cd0bb4963876170a1031c4ee081b141a30e511353c98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
