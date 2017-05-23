<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_354c617cbcfe49e15c3f61816de0c89e266ea21f6978275d45d0cbf0d1d753ed extends Twig_Template
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
        $__internal_8688466f8a089022021b3c0b173ffcaafdf5c7e4b1e62bab69daf3622bfd02f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8688466f8a089022021b3c0b173ffcaafdf5c7e4b1e62bab69daf3622bfd02f0->enter($__internal_8688466f8a089022021b3c0b173ffcaafdf5c7e4b1e62bab69daf3622bfd02f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8688466f8a089022021b3c0b173ffcaafdf5c7e4b1e62bab69daf3622bfd02f0->leave($__internal_8688466f8a089022021b3c0b173ffcaafdf5c7e4b1e62bab69daf3622bfd02f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
", "@Framework/Form/integer_widget.html.php", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
