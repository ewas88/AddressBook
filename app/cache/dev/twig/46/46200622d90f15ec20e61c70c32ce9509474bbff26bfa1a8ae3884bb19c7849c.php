<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ac9ec46623e55e618c8e872f504208e884578aa7b08481effcc97e13675f2369 extends Twig_Template
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
        $__internal_17eabf81ab602acb0cd771bfea5fc57ff34461eaf724bd0e71690c4c23457da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17eabf81ab602acb0cd771bfea5fc57ff34461eaf724bd0e71690c4c23457da1->enter($__internal_17eabf81ab602acb0cd771bfea5fc57ff34461eaf724bd0e71690c4c23457da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_17eabf81ab602acb0cd771bfea5fc57ff34461eaf724bd0e71690c4c23457da1->leave($__internal_17eabf81ab602acb0cd771bfea5fc57ff34461eaf724bd0e71690c4c23457da1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
