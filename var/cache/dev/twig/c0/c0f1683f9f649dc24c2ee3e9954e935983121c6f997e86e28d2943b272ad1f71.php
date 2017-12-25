<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_842e6c4d022a7eb949912fec4de4190efa0155790b12f34cefa0778e8c32896a extends Twig_Template
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
        $__internal_a72e5726be255a93586f11af0afcc100602a210938d7fccd0f73121a3ab5f9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72e5726be255a93586f11af0afcc100602a210938d7fccd0f73121a3ab5f9a6->enter($__internal_a72e5726be255a93586f11af0afcc100602a210938d7fccd0f73121a3ab5f9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_193f8bfbe99c64720478271be3f3b1586acf8412969af2fe03807d2291091a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193f8bfbe99c64720478271be3f3b1586acf8412969af2fe03807d2291091a1b->enter($__internal_193f8bfbe99c64720478271be3f3b1586acf8412969af2fe03807d2291091a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_a72e5726be255a93586f11af0afcc100602a210938d7fccd0f73121a3ab5f9a6->leave($__internal_a72e5726be255a93586f11af0afcc100602a210938d7fccd0f73121a3ab5f9a6_prof);

        
        $__internal_193f8bfbe99c64720478271be3f3b1586acf8412969af2fe03807d2291091a1b->leave($__internal_193f8bfbe99c64720478271be3f3b1586acf8412969af2fe03807d2291091a1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
