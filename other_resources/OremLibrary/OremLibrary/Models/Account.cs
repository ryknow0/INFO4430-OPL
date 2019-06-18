using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace OremLibrary.Models
{
    public class Account
    {
        public int AccountId { get; set; }
        public char PrimaryContact { get; set; }
        public char Address { get; set; }
        public char State { get; set; }
        public char Zip { get; set; }
        public int UserId { get; set; }
    }
}